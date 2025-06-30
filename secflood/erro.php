<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Erro - Serasa</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffeeef;
      color: #1b1c3a;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: #ec0077;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-weight: bold;
      text-transform: uppercase;
    }

    .error-container {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 2rem;
    }

    .error-box {
      background-color: white;
      padding: 3rem;
      border-radius: 12px;
      max-width: 600px;
      width: 100%;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
    }

    .error-code {
      font-size: 4rem;
      font-weight: bold;
      color: #ec0077;
    }

    .error-message {
      font-size: 1.5rem;
      margin: 1rem 0;
    }

    .error-description {
      color: #555;
      margin-bottom: 2rem;
    }

    .button {
      background-color: #ec0077;
      color: white;
      padding: 0.8rem 2rem;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      font-size: 1rem;
    }

    footer {
      background-color: #1b1c3a;
      color: white;
      text-align: center;
      padding: 2rem;
      font-size: 0.9rem;
    }

    footer .footer-links a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
    }

    footer .footer-links a:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      .error-box {
        padding: 2rem 1.5rem;
      }

      .error-code {
        font-size: 3rem;
      }

      .error-message {
        font-size: 1.3rem;
      }
    }
  </style>
</head>

<body>
  <header>
    <div class="logo">Serasa</div>
  </header>

  <div class="error-container">
    <div class="error-box">
      <div class="error-code">Erro 500</div>
      <div class="error-message">Página indisponível</div>
      <div class="error-description">
        A página que você está procurando pode ter sido removida ou está temporariamente indisponível.
      </div>
      <a href="entrar.php" class="button">Voltar para o início</a>
    </div>
  </div>

  <footer>
    <p>© 2025 Serasa Experian. Todos os direitos reservados.</p>
    <div class="footer-links">
      <a href="https://www.serasa.com.br/app/politica-de-privacidade/">Política de Privacidade</a>
      <a href="https://www.serasa.com.br/app/politica-de-privacidade/">Termos de Uso</a>
    </div>
  </footer>
</body>

</html>
