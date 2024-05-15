<?php
  require_once "app.php"
?>

<?php
  $id = $_GET['id'];
  $p = getAllData($conn);
  $d = findFilmById($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <title>Detail Film</title>
</head>
<body>
  <div class="flex h-screen justify-center items-center top-4">
    <section class="max-w-4xl p-6 mx-auto bg-teal-200 rounded-md shadow-md dark:bg-gray-800">
      <h2 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Detail Film</h2>
      <p class="mt-2">Nama Film : <?= $d['nama_film'] ?></p>
      <p class="mt-2">Tanggal Ditonton : <?= $d['tgl_ditonton'] ?></p>
      <p class="mt-2">Tahun : <?= $d['tahun'] ?></p>
      <p class="mt-2">Genre : <?= $d['genre'] ?></p>
      <p class="mt-2">Durasi : <?= $d['durasi'] ?></p>
      <p class="mt-2">Penilaian : <?= $d['penilaian'] ?></p>
      <p class="mt-2">Created at : <?= $d['created_at'] ?></p>
      <p class="mt-2">Updated at : <?= $d['updated_at'] ?></p>
    </section>
  </div>
</body>
</html>
  