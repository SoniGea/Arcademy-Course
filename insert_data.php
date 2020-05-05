<?php
  include 'koneksi.php';

  $sql ="INSERT INTO user
  (
    id,
    nama,
    role,
    availability,
    age,
    location,
    years_experience,
    email
  ) VALUES (
      '1',
      'sonitehe',
      'Front End Developer',
      'Full Time',
      '27',
      'West Jakarta',
      '5',
      'Sonygea@gmail.com'
  )";

  if ($koneksi->query($sql) == TRUE) {
    echo "Berhasil";
  } else {
    echo "gagal";
  }
 ?>
