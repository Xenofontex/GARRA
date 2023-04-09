<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username e password recebidos do formulário de login
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  // aqui você deve inserir a lógica para verificar se o login e a senha estão corretos
  // isso pode ser feito consultando uma tabela no seu banco de dados ou verificando com dados armazenados em algum arquivo

  if ($username == 'admin' && $password == 'senha') {
    // se o login e a senha estiverem corretos, redireciona para a página de formulário
    
    header('Location: formulario.php');
    exit();
  } else {
    // se o login e a senha estiverem incorretos, exibe uma mensagem de erro
    
    echo 'Login ou senha incorretos.';
  }
}

if(!isset($_SESSION['login_user'])){
  header("location: login.php");
}

$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "meu_banco_de_dados";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $instrument_name = $_POST['instrument_name'];
  $customer_name = $_POST['customer_name'];
  $material = $_POST['material'];
  $cost = $_POST['cost'];
  $hours_worked = $_POST['hours_worked'];

  $sql = "INSERT INTO instrumentos (instrument_name, customer_name, cost, material, hours_worked) VALUES ('$instrument_name', '$customer_name', '$cost', '$material', '$hours_worked')";

  if (mysqli_query($conn, $sql)) {
    echo "Informações inseridas com sucesso!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);

?>
