<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dados Cadastrados</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>
<body>

<section class="section">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-half">
        <h2 class="subtitle has-text-centered">Dados Cadastrados</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Senha</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];

                echo "<tr>
                        <td>$nome</td>
                        <td>$email</td>
                        <td>$senha</td>
                      </tr>";
              }
            ?>
          </tbody>
        </table>

        <!-- Botão para seguir para o site -->
        <div class="has-text-centered">
          <a class="button is-info" href="pagina_do_site.html">Seguir para o Site</a>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
