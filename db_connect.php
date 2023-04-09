<php?

$servername = "localhost";
$username = "seu_username";
$password = "sua_senha";
$dbname = "instrumentos_cliente";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
  
?>
