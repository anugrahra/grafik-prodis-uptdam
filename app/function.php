<?php

function jumlah_produksi_per_bulan($bulan) {
  global $link_db;

  $query = "SELECT * FROM produksi WHERE bulan = '$bulan'";
  $result =  mysqli_query($link_db, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $jml_produksi = $row['jml_produksi'];
  }

  if ($jml_produksi != 0){
    return $jml_produksi;  
  } else {
    return false;
  }
}

function jumlah_distribusi_per_bulan($bulan) {
  global $link_db;

  $query = "SELECT * FROM distribusi WHERE bulan = '$bulan'";
  $result =  mysqli_query($link_db, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $jml_distribusi = $row['jml_distribusi'];
  }

  if ($jml_distribusi != 0){
    return $jml_distribusi;  
  } else {
    return false;
  }
}

function jumlah_pemair_per_bulan($bulan) {
  global $link_db;

  $query="SELECT * FROM pemair WHERE bulan = '$bulan'";
  $result =  mysqli_query($link_db, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $jml_pemair = $row['jml_pemair'];
  }

  if ($jml_pemair != 0){
    return $jml_pemair;  
  } else {
    return false;
  }
}

function tampilkan_data_prodis() {
  global $link_db;

  $query = "SELECT produksi.bulan, produksi.jml_produksi, distribusi.jml_distribusi, pemair.jml_pemair FROM produksi INNER JOIN distribusi ON produksi.bulan = distribusi.bulan INNER JOIN pemair ON produksi.bulan = pemair.bulan";
  $result = mysqli_query($link_db, $query);

  return $result;
}