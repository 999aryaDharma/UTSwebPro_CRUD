<?php
session_start();
require_once "app.php";
$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Riwayat Film</title>
</head>
<body>

<!-- Header -->
  <header class="bg-teal-400 absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="" class="font-bold text-lg text-white block py-6">CRUD Simple</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-10">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line duration-300 ease-in-out"></span>
            <span class="hamburger-line duration-300 ease-in-out origin-bottom-left "></span>
          </button>
        </div>
      </div>
    </div>
  </header>
<!-- Header -->

<!-- Body -->
  <section class="pt-28">
    <div class="container flex justify-center">
      <div class="">
        <div class="w-full px-4 flex flex-col">
          <h1 class="font-semibold text-center text-2xl">Daftar Film yang Sudah ditonton</h1>

          <?php if (isset($_SESSION['BERHASIL_TAMBAH_FILM'])) : ?> 
            <?= $_SESSION['BERHASIL_TAMBAH_FILM'] ?>
            <?php session_unset(); ?>
          <?php endif; ?>
        <div class="relative overflow-x-auto shadow-2xl">
          <table class="table-auto border flex justify-center items-center mt-8 w-auto rounded-lg">
              <tr class="bg-gray-400">
                <!-- <th class="border-[2px] border-solid border-black px-4 py-2">No. </th> -->
                <th class="border-[2px] border-solid border-black px-4 py-2">Nama Film</th>
                <th class="border-[2px] border-solid border-black px-4 py-2">Detail Film</th>
                <th class="border-[2px] border-solid border-black px-4 py-2">Tanggal Ditonton</th>
                <th class="border-[2px] border-soli  border-black px-4 py-2">Aksi</th>
              </tr>
                <?php foreach($p as $k => $v): 
                  $modal_id = str_replace([' ', '"', "'", '&', '<', '>', '/', '\\', '?', '#', '.'], '_', $v['nama_film']);
                ?>
                  <tr>
                    <td class="border-[2px] border-solid border-black px-4 py-2"><?= $v['nama_film'] ?></td>
                    <td class="border-[2px] border-solid border-black px-4 py-2"><a href="<?= "/detailFilm.php?id={$v['id']}" ?>" class="text-blue-500 underline hover:text-red-500 hover:underline">Detail Film</a></td>
                    <td class="border-[2px] border-solid border-black px-4 py-2"><?= $v['tgl_ditonton'] ?></td>
                    <td class="border-[2px] border-solid border-black px-4 py-2">
                      <a href="<?= "/edit-film.php?id={$v['id']}" ?>" class="bg-blue-600 hover:bg-blue-700 text-white border-none btn btn-sm rounded-md">Edit</a> ||
                      <a href="<?= "/hapus-film.php?id={$v['id']}" ?>"><button onclick="modal<?php echo $modal_id; ?>.showModal()" class="bg-red-700 hover:bg-red-800 text-white border-none btn btn-sm rounded-lg">Hapus</button></a>
                      <dialog id="modal<?php echo $modal_id; ?>" class="modal">
                        <div class="modal-box">
                          <h3 class="font-bold text-lg">Hapus Film : <?php echo $modal_id; ?></h3>
                          <p class="py-4">Apakah anda yakin ingin menghapus film <?php echo $modal_id; ?>?</p>
                          <div class="modal-action">
                            <form method="dialog">
                              <div class="flex space-x-3">
                              <button class="btn">Batal</button>
                                <a href="<?= "/hapus-film.php?id={$v['id']}" ?>"<?php echo $modal_id; ?> class="bg-red-700 hover:bg-red-800 text-white btn">Hapus</a>
                              </div>
                            </form>
                          </div>
                        </div>
                      </dialog>
                    </td>
                  </tr>
                </tr>
              <?php endforeach; ?>
          </table>
        </div>
          <div class="flex flex-col mt-8 shadow-xl">
            <a href="tambah-film.php"><button class="btn bg-blue-700 hover:bg-blue-800 focus:bg-blue-900 text-white rounded-lg py-2 px-4 w-full text-center">Tambahkan Data</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Body -->  
</html>

<?php
mysqli_close($conn);
?>


  