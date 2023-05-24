<?php  // Dane do połączenia z bazą danych $servername = "localhost"; // adres serwera bazy danych $username = "root"; // nazwa użytkownika bazy danych $password = ""; // hasło użytkownika bazy danych $dbname = "bicycle"; // nazwa bazy danych  // Połączenie z bazą danych $conn = mysqli_connect($servername, $username, $password, $dbname);  // Sprawdzenie połączenia z bazą danych if (!$conn) {   die("Connection failed: " . mysqli_connect_error()); } echo "<script>console.log('Connection succesful' );</script>";    ?>
<?php

// Dane do połączenia z bazą danych
$servername = "localhost"; // adres serwera bazy danych
$username = "root"; // nazwa użytkownika bazy danych
$password = ""; // hasło użytkownika bazy danych
$dbname = "media-shop"; // nazwa bazy danych

// Połączenie z bazą danych
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Sprawdzenie połączenia z bazą danych
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "<script>console.log('Connection succesful' );</script>";



?>