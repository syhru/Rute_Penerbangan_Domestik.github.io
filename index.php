<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Bandara</title>
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="library/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="library/css/style.css">
  <!-- CDN datatable css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

</head>
<body>
  <div class="container mt-3">
    <div class="row justify-content-center">

    <!-- Navigasi -->
      <nav class="navbar navbar-expand-lg navbar-light bg-blue d-flex justify-content-center mb-4">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/icon.png" alt="" width="200px" ></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fs-4">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a> <!-- me -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Form_input.php">Daftar Rute</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Rute_domestik.php">Rute Domestik</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <!-- Content -->

      <!-- Tabel Bandara Asal -->
      <div class="col-md-6">
        <h3 class="text-center mb-4 display-6">Bandara Asal</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Bandara Asal</th>
              <th scope="col">Pajak</th>
            </tr>
          </thead>
          <tbody>
            
            <?php include 'get_data.php'; ?>  <!-- Memasukkan file PHP untuk membaca data dari JSON -->
            <?php foreach ($bandara_asal as $bandara) : ?> <!-- Loop untuk menampilkan data bandara asal dalam tabel -->
              <tr>
                <td><?php echo $bandara['No']; ?></td> <!-- Menampilkan nomor bandara -->
                <td><?php echo $bandara['Bandara Asal']; ?></td> <!-- Menampilkan nama bandara asal -->
                <td><?php echo $bandara['Pajak']; ?></td> <!-- Menampilkan nilai pajak bandara asal -->
              </tr>
            <?php endforeach; ?> <!-- Selesai loop data bandara asal -->
          </tbody>
        </table>
      </div>

      <!-- Tabel Bandara Tujuan -->
      <div class="col-md-6">
        <h3 class="text-center mb-4 display-6">Bandara Tujuan</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Bandara Tujuan</th>
              <th scope="col">Pajak</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($bandara_tujuan as $bandara) : ?> <!-- Loop untuk menampilkan data bandara tujuan dalam tabel -->
              <tr>
                <td><?php echo $bandara['No']; ?></td> <!-- Menampilkan nomor bandara -->
                <td><?php echo $bandara['Bandara Tujuan']; ?></td> <!-- Menampilkan nama bandara tujuan -->
                <td><?php echo $bandara['Pajak']; ?></td> <!-- Menampilkan nilai pajak bandara tujuan -->
              </tr>
            <?php endforeach; ?> <!-- Selesai loop data bandara tujuan -->
          </tbody>
        </table>
      </div>

        <!-- Menampilkan Daftar Maskapai Beserta Rute Penerbangannya -->
        <!-- Tabel untuk menampilkan data -->
      <h2 class="text-center mb-4 mt-3 display-6">Daftar Rute Tersedia</h2>
      <table id="example" class="table table-striped mb-5 table-bordered">
          <thead>
              <tr>
                  <th>Maskapai</th>
                  <th>Asal Penerbangan</th>
                  <th>Tujuan Penerbangan</th>
                  <th>Harga Tiket</th>
                  <th>Pajak</th>
                  <th>Total Harga</th>
              </tr>
          </thead>
          <tbody>
              <!-- untuk membaca data dari data.json dan mengisi tabel -->
              <?php
              $dataJson = file_get_contents("data/data.json"); // Mengambil data JSON dari berkas
              $dataRute = json_decode($dataJson, true); // Mengubah data JSON menjadi array
              include "get_data_input.php"; // Memasukkan file PHP untuk membaca data dari JSON

              // Menyiapkan array yang akan dijadikan referensi untuk pengurutan
              $maskapaiReferensi = array_column($dataRute, 'maskapai');

              // Urutkan array data berdasarkan referensi 'maskapai'
              array_multisort($maskapaiReferensi, SORT_ASC, $dataRute);

              foreach ($dataRute as $rute) {
                // Menampilkan data rute penerbangan
                  $totalPajak = totalPajak($rute['bandara_asal'], $rute['bandara_tujuan']); 
                  $totalHarga = totalHarga($totalPajak, $rute['harga_tiket']);
                  echo "<tr>";
                  echo "<td>" . $rute['maskapai'] . "</td>";
                  echo "<td>" . $rute['bandara_asal'] . "</td>";
                  echo "<td>" . $rute['bandara_tujuan'] . "</td>";
                  echo "<td>" . $rute['harga_tiket'] . "</td>";
                  echo "<td>" . $totalPajak . "</td>";
                  echo "<td>" . "<center>".$totalHarga ."</center>" . "</td>";
                  echo "</tr>";
              }
              ?>
          </tbody>
      </table>
    </div>
  </div>

   <!-- boostrap js -->
  <script src="library/js/bootstrap.min.js"></script>
  
</body>
</html>
