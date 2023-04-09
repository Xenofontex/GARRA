<!DOCTYPE html>
<html>
  <head>
      <title>Autenticação</title>
  </head>
  <body>
      <h1>Login</h1>
      <form action="process.php" method="POST">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Entrar</button>
      </form>
  </body>
</html>
