<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>SI 2018</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  <body class="text-center">
    <form class="form-signin" action="autenticar.php" method="post">
      <img class="mb-4" src="img/Imagem1.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Por favor, digite login e senha para continuar!</h1>
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Login" name="login" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; SI 2018</p>
    </form>
  </body>
</html>