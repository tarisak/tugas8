<?php 
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "db_sekolah";

  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // check connection
  if (!$conn) {
      die("Connection failed:" . mysqli_connect_error());
  }

  $sql = "CREATE TABLE pribadi (
      nik INT (50) PRIMARY KEY,
      js VARCHAR(50) NOT NULL,
      nisn VARCHAR(50) NOT NULL,
      tempatL VARCHAR(50) NOT NULL,
      tanggalL VARCHAR(50) NOT NULL
      )";
      
  if (mysqli_query($conn, $sql)) {
      echo "Database created successfully";
  } else {
      echo "Error creating database" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>