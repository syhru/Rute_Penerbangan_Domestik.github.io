<?php
// Membaca isi file JSON
// dengan menggunakan fungsi file_get_contents
$data_json = file_get_contents('data/rute_domestik.json');

// dengan menggunakan fungsi json_decode Mengubah JSON menjadi array asosiatif
$data_array = json_decode($data_json, true);

// Memisahkan data rute domestik
$domestik = $data_array['routes']; 
?>


