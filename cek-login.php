<?php

 include 'db.php';

 $query  = "SELECT * FROM user";

 if (@$_GET['cari']) {
    // query untuk searching
    $query .= " WHERE username LIKE '%".$_GET['cari']."%'";
    $query .= " OR password LIKE '%".$_GET['cari']."%'";
    $query .= " ORDER BY id DESC";
 }

 $result = $koneksi->query($query);
?>

<div class="row justify-content-between">
    <h1>SELAMAT FATANG</h1>
    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>    
</div>
