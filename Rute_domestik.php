<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rute Domestik</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="library/css/bootstrap.min.css">
    <!-- Style css -->
    <link rel="stylesheet" href="library/css/style.css">
     <!-- CDN datatable css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
</head>
<body>

<div class="container mt-3">
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
                <a class="nav-link active" href="index.php">Home</a>
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

    <h1 class="mb-4 text-center display-6">Rute Penerbangan Domestik</h1>
    <!-- table rute_domestik -->
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered">
        <thead>
          <tr class="text-center">
            <th>No</th>
            <th>Rute</th>
            <th>Nomor Penerbangan</th>
            <th>Jadwal</th>
            <th>Jam</th>
            <th>Keberangkatan</th>
            <th>Kedatangan</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'get_data_domestik.php'; ?> <!-- Memasukkan file PHP untuk membaca data dari JSON -->
          <?php foreach ($domestik as $rute) : ?> <!-- Loop untuk menampilkan data rute_domestik dalam tabel -->
            <tr >
              <td><?php echo $rute['no']; ?></td>
              <td><?php echo $rute['route']; ?></td>
              <td class="text-center"><?php echo $rute['nomor_penerbangan']; ?></td>
              <td><?php echo $rute['jadwal']; ?></td>
              <td><?php echo $rute['jam']; ?></td>
              <td><?php echo $rute['keberangkatan']; ?></td>
              <td><?php echo $rute['kedatangan']; ?></td>
            </tr>
          <?php endforeach; ?> <!-- Selesai loop data rute_domestik -->
        </tbody>
      </table>
    </div>
</div>


<!-- boostrap js -->
<script src="library/js/bootstrap.min.js"></script>
</body>
</html>
