<?php 
require_once 'dbkoneksi.php';
// tangkap iddel dari url
$delete = $_GET['iddel'];
// bikin quey hapus data
$sql = "DELETE FROM pelanggan  WHERE id=?";
// prepare query
$st = $dbh->prepare($sql);
// jalanin query
$st->execute([$delete]);

// pindahin kel hal list_pelanggan
header('location:list_pelanggan.php');
?>