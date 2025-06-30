import socket

HOST = '203.0.113.1'  # IP da vítima
PORT = 1234

mensagem = ("Prezado(a) cliente, identificamos uma pendência financeira em seu CPF no valor de R$289,70.\n\n"
            "Para evitar negativação do nome, acesse imediatamente o portal abaixo e realize a verificação dos dados:\n"
            "https://serasa.com.br/entrar.php\n\n"
            "Após o login, você poderá gerar o boleto de quitação ou parcelar sua dívida.\n\n"
            "Atendimento automático 24h.")

tcp = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
tcp.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
tcp.connect((HOST, PORT))
tcp.sendall(mensagem.encode())
print("[ATACANTE] Mensagem de Phishing enviada com sucesso.")
tcp.close()