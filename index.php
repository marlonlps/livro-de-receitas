<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>
<body>

<section class="section">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-half">
        <h1 class="title has-text-centered">Cadastro</h1>
        <form action="processa_cadastro.php" method="post">
          <div class="field">
            <label class="label">Nome</label>
            <div class="control">
              <input class="input" type="text" name="nome" placeholder="Seu Nome" required>
            </div>
          </div>

          <div class="field">
            <label class="label">E-mail</label>
            <div class="control">
              <input class="input" type="email" name="email" placeholder="seu@email.com" required>
            </div>
          </div>

          <div class="field">
            <label class="label">Senha</label>
            <div class="control">
              <input class="input" type="password" name="senha" placeholder="********" required>
            </div>
          </div>

          <div class="field is-grouped">
            <div class="control">
              <button class="button is-primary" type="submit">Cadastrar</button>
            </div>
            <div class="control">
              <button type="reset" class="button is-link">Cancelar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>
