<?php

function jumlah_produksi_per_bulan($bulan) {
  global $link_db;

  $query = "SELECT * FROM produksi WHERE bulan = '$bulan'";
  $result =  mysqli_query($link_db, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $jml_produksi = $row['jml_produksi'];
  }

  return $jml_produksi;
}

function jumlah_distribusi_per_bulan($bulan) {
  global $link_db;

  $query = "SELECT * FROM distribusi WHERE bulan = '$bulan'";
  $result =  mysqli_query($link_db, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $jml_distribusi = $row['jml_distribusi'];
  }

  return $jml_distribusi;
}

function tampilkan_data_prodis() {
  global $link_db;

  $query = "SELECT produksi.bulan, produksi.jml_produksi, distribusi.jml_distribusi FROM produksi INNER JOIN distribusi ON produksi.bulan = distribusi.bulan";
  $result = mysqli_query($link_db, $query);

  return $result;
}