<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts_webpro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Gagagl konek ke database: " . mysqli_connect_error());
}
// echo "Berhasil Konek ke database";

function getAllData ($conn){
  $sql = "SELECT * FROM film";
  $result = mysqli_query($conn, $sql);

  $data = [];

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
  }

  return $data;
}

// $p = getAllData($conn);

function findFilmById ($conn, $id){
  $sql = "SELECT * FROM film WHERE id = $id LIMIT 1";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      return $row;
    }
  }

  return null;
}


function filmBaru($conn, $data)
{
    $sql = "INSERT INTO film
    (nama_film, tgl_ditonton, tahun, genre, durasi, penilaian, created_at, updated_at)
    VALUES (
        '{$data['nama_film']}', 
        '{$data['tgl_ditonton']}', 
        '{$data['tahun']}', 
        '{$data['genre']}', 
        '{$data['durasi']}',
        '{$data['penilaian']}',
        NOW(), 
        NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

// function hapus($conn, $id) {
//   global $conn;
//   mysqli_query($conn, "DELETE FORM film WHERE id = $id");
//   return mysqli_affected_rows($conn);
// }

function hapusData($conn, $id) {
    // Lakukan query untuk menghapus data dengan ID tertentu
    $query = "DELETE FROM film WHERE id = $id";
    if (mysqli_query($conn, $query)) {
      return mysqli_query($conn, $query);
        // echo "
        //   <script>
        //     alert('DATA BERHASIL DIHAPUS!');
        //     document.location.href = 'index.php';
        //   </script>
        // ";
    } else {
        return null;
        // echo "
        //   <script>
        //     alert('DATA GAGAL DIHAPUS!');
        //     document.location.href = 'index.php';
        //   </script>
        // ";
    }
}

function editData($data){
  global $conn;
  // Ambil data dari formulir
  $id = $data['id'];
  $nama_film = $data['nama_film'];
  $tgl_ditonton = $data['tgl_ditonton'];
  $tahun = $data['tahun'];
  $genre = $data['genre'];
  $durasi = $data['durasi'];
  $penilaian = $data['penilaian'];

  // Query untuk mengupdate data
  $sql = "UPDATE film SET 
    nama_film='$nama_film',
    tgl_ditonton='$tgl_ditonton', 
    tahun='$tahun', 
    genre='$genre', 
    durasi='$durasi',
    penilaian='$penilaian',
    updated_at=NOW()
    WHERE id = $id";

  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);

}
//   if (mysqli_query($conn, $sql)) {
//     return mysqli_insert_id($conn);
//   }
//   return null;
// }
// function tambah($data) {
//   global $conn;

//   $nama_film = $data["nama_film"];
//   $tahun = $data["taun"];
//   $genre = $data["genre"];
//   $durasi = $data["durasi"];
//   $penilaian = $data["penilaian"];

//   $query = "INSERT INTO film
//             VALUES 
//             ('', '$nama_film', '$taun', '$genre', '$durasi;, '$penilaian', NOW(), NOW())
//             ";
//   mysqli_query($conn, $query);
//   return mysqli_affected_rows($conn);
// }
// $p = getAllData($conn);

// echo "<pre>";
// echo var_dump($p);
// echo "</pre>";

// mysqli_close($conn);