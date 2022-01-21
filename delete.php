<?php

require "function.php";

//agar tidak bisa masuk secara pengetikan manual pada url


$id= $_GET['id'];
if (delete($id)){

echo
"<script>
alert('data berhasil di hapus');
document.location.href = 'index.php';
</script>";
}else{
"<script>
alert('data tidak berhasil di hapus');
</script>";
}
