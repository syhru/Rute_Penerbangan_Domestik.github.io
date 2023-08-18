<?php
// Membaca isi file JSON
// dengan menggunakan fungsi file_get_contents
$data_json = file_get_contents('data/data_bandara.json');

// dengan menggunakan fungsi json_decode Mengubah JSON menjadi array asosiatif
$data_array = json_decode($data_json, true);

// Memisahkan data bandara asal dan bandara tujuan
$bandara_asal = $data_array['bandara_asal'];  
$bandara_tujuan = $data_array['bandara_tujuan'];
?>
