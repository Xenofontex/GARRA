<!DOCTYPE html>
<html>
  <head>
    <title>Formulário de assistência técnica</title>
  </head>
  <body>
    <h1>Formulário de assistência técnica</h1>
    <form method="post" action="submit.php">
      <label for="instrumento">Nome do instrumento:</label>
      <input type="text" id="instrumento" name="instrumento" required><br><br>

      <label for="cliente">Nome do cliente:</label>
      <input type="text" id="cliente" name="cliente" required><br><br>

      <label for="valor_gasto">Valor gasto:</label>
      <input type="number" id="valor_gasto" name="valor_gasto" required><br><br>

      <label for="material">Material utilizado:</label>
      <input type="text" id="material" name="material" required><br><br>

      <label for="horas_trabalhadas">Horas trabalhadas:</label>
      <input type="number" id="horas_trabalhadas" name="horas_trabalhadas" required><br><br>

      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
