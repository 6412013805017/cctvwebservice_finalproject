<?php //เป็นไฟล์เชื่อมต่อกับฐานข้อมูล
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "cctvwebservice_db";

  try { //สำหรับเชื่อมต่อ
      $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) { //สำหรับ error
      echo "<script>alert('Connect Database Failed')</script>";
  }
?>