<?php
//Array Daftar Bandara 
$asalPenerbangan = array("Soekarno-Hatta (CGK)", "Husein Sastranegara (BDO)", "Abdul Rachman Saleh (MLG)", "Juanda (SUB)"); //Array bandara asal penerbangan
$tujuanPenerbangan = array("Ngurah Rai (DPS)", "Hasanuddin (UPG)", "Inanwatan (INX)", "Sultan Iskandarmuda (BTJ)"); //Aray bandara tujuan penerbangan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rute Penerbangan</title>
     <!-- bootstrap css -->
    <link rel="stylesheet" href="library/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="library/css/style.css">
    
<body>

<div class="container mt-3">
    <div class="row justify-content-center">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-blue d-flex justify-content-center mb-4">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/icon.png" alt="" width="200px"></a>
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

        <!-- Content -->
        <div class="col-md-8">
            <div class="card shadow-lg bg-primary p-3 rounded-4 transparent-cards">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <h1 class="card-title text-white display-6">PENDAFTARAN RUTE PENERBANGAN</h1>
                        </div>
                        <div class="col-md-6">
                            <img src="img/Pesawat.png" width="100%" height="100%">
                        </div>
                    </div>
                </div>

                    <!-- Form Pendaftaran Rute Penerbangan -->
                <div class="card border-1 rounded-4 transparent-cards shadow-lg mb-3 mt-3 p-3">
                    <div class="card-body">
                        <form method="POST" action="get_data_input.php"> 
                            <div class="mb-3">
                                <label for="maskapai" class="form-label">Maskapai</label>
                                <input type="text" name="maskapai" class="form-control form-control-transparent" id="maskapai" required placeholder="Masukkan Nama Maskapai">
                            </div>
                            <div class="mb-3">
                                <label for="bandara_asal" class="form-label">Bandara Asal</label>
                                <select name="bandara_asal" id="bandara_asal" class="form-select form-control-transparent">
                                    <!-- Pilihan untuk Bandara Asal -->
                                    <?php
                                    foreach ($asalPenerbangan as $ap) {
                                        echo "<option value='" . $ap . "'>" . $ap . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="bandara_tujuan" class="form-label">Bandara Tujuan</label>
                                <select name="bandara_tujuan" class="form-select form-control-transparent" id="bandara_tujuan">
                                    <!-- Pilihan untuk Bandara Tujuan -->
                                    <?php
                                    foreach ($tujuanPenerbangan as $tp) {
                                        echo "<option value='" . $tp . "'>" . $tp . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="harga" class="form-label">Harga Tiket</label>
                                <input type="number" name="harga" class="form-control form-control-transparent" required placeholder="Harga Tiket">
                            </div>
                            <div class="d-grid gap-2 p-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
    
    <!-- bootstrap Js -->
<script src="library/js/bootstrap.min.js"></script>

</body>
</html>