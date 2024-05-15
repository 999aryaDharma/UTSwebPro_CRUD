<?php
// simpan $_POST ke database
require_once "app.php";
session_start();

$n = filmBaru($conn, $_POST);

if (is_null($n)){
  $_SESSION['BERHASIL_TAMBAH_FILM'] = 
          "<script>
            alert('DATA GAGAL DITAMBAH!');
            document.location.href = 'index.php';
          </script>";
} else {
  $_SESSION['BERHASIL_TAMBAH_FILM'] = 
          "<script>
            alert('DATA BERHASIL DITAMBAH!');
            document.location.href = 'index.php';
          </script>";
}

// $e = editData($conn, $_POST);

// if (is_null($e)){
//   $_SESSION['BERHASIL_EDIT_FILM'] = 
//           "<script>
//             alert('DATA GAGAL DIEDIT!');
//             document.location.href = 'index.php';
//           </script>";
// } else {
//   $_SESSION['BERHASIL_EDIT_FILM'] = 
//           "<script>
//             alert('DATA BERHASIL DIEDIT!');
//             document.location.href = 'index.php';
//           </script>";
// }

header("Location: /index.php");
die(); 