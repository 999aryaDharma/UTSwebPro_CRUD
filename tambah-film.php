<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Film</title>
    <link href="dist/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
</head>

<body>
  <div class="flex h-screen justify-center items-center">
    <section class="max-w-4xl p-6 mx-auto bg-teal-200 rounded-md shadow-md dark:bg-gray-800">
      <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Tambah data film</h2>
          <form action="store-film.php" method="post" name="myForm" onsubmit="return validateForm()">
            <div class="grid grid-cols-2 gap-4 mt-4 sm:grid-cols-2">
              <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">Nama Film</label>
                <input name="nama_film" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" required>
              </div>
              <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Tanggal ditonton</label>
                <input name="tgl_ditonton" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" required>
              </div>
              <div>
                <label class="text-gray-700 dark:text-gray-200" for="password">Tahun Rilis</label>
                <input name="tahun" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" required>
              </div>
              <div>
                <label class="text-gray-700 dark:text-gray-200" for="password">Genre</label>
                  <input name="genre" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" required>
              </div>
              <div>
                <label class="text-gray-700 dark:text-gray-200" for="password">Durasi</label>
                  <input name="durasi" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"  required>
              </div>
              <div>
                <label class="text-gray-700 dark:text-gray-200" for="password">Penilaian</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="penilaian" name="penilaian" placeholder="Penilaian" required></textarea>
              </div>
              <div class="flex justify-start items-start mt-2">
                <button type="submit" class="btn leading-5 space-x-2 px-6 text-white transform bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-800">
                  <svg class="w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                  </svg>
                  <span class="text-lg">Tambah</span>
                </button>
                </div>
                </form>
            </form>
        </section>
    </div>
</body>
</html>