<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "wpsmt5";
$conn = mysqli_connect($host, $user, $password, $db);

$result = mysqli_query($conn, "SELECT * FROM calon_mhs");

// ambil data
//mysqli_fetch_row() = mengembalikan data dalam bentuk numerik
//mysqli_fetch_assoc() = mengembalikan data dalam  #nama field
//mysqli_fetch_array() = kombinasi
//while ($camaba = mysqli_fetch_row($result)){
//var_dump($camaba);
//}
?> 