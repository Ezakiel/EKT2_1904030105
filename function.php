<?php
$conn = mysqli_connect('localhost','root','','wpsmt5');

//pemanggilan tabel
function query($query)
{
global $conn;

//mengambil seluruh data 
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
    return mysqli_fetch_assoc ($result);
}
// memanggil berdasr element
$rows = [];
while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
return $rows;
}