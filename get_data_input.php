<?php
 
 $berkas = "data/data.json"; //Berkas JSON yang akan dibaca
 $dataJson = file_get_contents($berkas); //Mengambil data JSON dari berkas
 $dataRute = json_decode($dataJson, true); //Mengubah data JSON menjadi array
 
 //Array Daftar Bandara dan Pajak
 $asalPenerbangan = array ("Soekarno-Hatta (CGK)", "Husein Sastranegara (BDO)", "Abdul Rachman Saleh (MLG)", "Juanda (SUB)"); //Array bandara asal penerbangan
 $tujuanPenerbangan = array ("Ngurah Rai (DPS)", "Hasanuddin (UPG)", "Inanwatan (INX)", "Sultan Iskandarmuda (BTJ)"); //Aray bandara tujuan penerbangan
 $pajakAsalPenerbangan = array ("Soekarno-Hatta (CGK)"=>50000, "Husein Sastranegara (BDO)"=>30000, "Abdul Rachman Saleh (MLG)"=>40000, "Juanda (SUB)"=>40000); //Array pajak dari bandara asal
 $pajakTujuanPenerbangan = array ("Ngurah Rai (DPS)"=>80000, "Hasanuddin (UPG)"=>70000, "Inanwatan (INX)"=>90000, "Sultan Iskandarmuda (BTJ)"=>70000); //Aray pajak dari bandara tujuan


    //Fungsi untuk menghitung total pajak
    function totalPajak($pajakAsal, $pajakTujuan){
		global $pajakAsalPenerbangan, $pajakTujuanPenerbangan;											//Variabel Global

		foreach ($pajakAsalPenerbangan as $pa =>$pa_value) {									//Mengambil biaya pajak dari bandara asal yang dipilih
			if($pajakAsal == $pa){
				$nilaiPajakA = $pa_value;
			}
		}

		foreach ($pajakTujuanPenerbangan as $pt =>$pt_value) {									//Mengambil biaya pajak dari bandara tujuan yang dipilih
			if($pajakTujuan == $pt){
				$nilaiPajakB = $pt_value;
			}
		}

		return $nilaiPajakA + $nilaiPajakB;
	}

    //Fungsi untuk menghitung total harga
    function totalHarga($totalPajak, $hargaTiket){
        return $totalPajak + $hargaTiket;
    }

    // Menampung seluruh hasil inputan User 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $maskapai = $_POST['maskapai'];
    $bandaraAsal = $_POST['bandara_asal'];
    $bandaraTujuan = $_POST['bandara_tujuan'];
    $hargaTiket = $_POST['harga'];

    // Muat data yang ada dari file JSON 
    $berkas = "data/data.json";
    $dataJson = file_get_contents($berkas);
    $dataRute = json_decode($dataJson, true);

    // Tambahkan data baru ke dalam array yang ada di file JSON
    $dataRute[] = array(
        'maskapai' => $maskapai,
        'bandara_asal' => $bandaraAsal,
        'bandara_tujuan' => $bandaraTujuan,
        'harga_tiket' => $hargaTiket
    );

    // Ubah array yang telah diperbarui menjadi JSON dan simpan ke file 
    file_put_contents($berkas, json_encode($dataRute, JSON_PRETTY_PRINT));

    // Alihkan kembali ke index.php setelah menyimpan data
    header('Location: index.php');
    exit();
}    
    
?>