<?php
include 'db.php';

if(isset($_POST['proses'])){
    mysqli_query($db, "insert into tiket set
    kodeTiket = '$_POST[kodeTiket]',
    berangkat = '$_POST[berangkat]',
    noKursi = '$_POST[noKursi]',
    kodePesawat = '$_POST[kodePesawat]',
    namaPembeli = '$_POST[namaPembeli]',
    tujuan = '$_POST[tujuan]',
    tglBerangkat = '$_POST[tglBerangkat]',
    waktuBerangkat ='$_POST[waktuBerangkat]',
    waktuSampai = '$_POST[waktuSampai]',
    harga = '$_POST[harga]',
    kelas ='$_POST[kelas]',
    total = '$harga'");

    echo" Data Berhasil Tersimpan";
    
}

?>