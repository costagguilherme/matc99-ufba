import socket

HOST = '0.0.0.0'
PORT = 1234

tcp = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
tcp.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
tcp.bind((HOST, PORT))
tcp.listen()
print("[VÍTIMA] ONLINE")

conn, addr = tcp.accept()

data = conn.recv(1024)
if data:
    print(f"[Serasa]: {data.decode()}")
    with open("chat.txt", "a") as f:
        f.write(f"{data.decode()}\n")

conn.close()
tcp.close()