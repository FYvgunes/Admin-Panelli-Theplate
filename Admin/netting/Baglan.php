<?php
$servername = "localhost";
$database = "Tamirci";
$username = "root";
$password = "";

try {
      $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      $conn->exec("SET CHARACTER SET utf8");
      $conn->query("SET NAMES 'utf8'");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Bağlantı Başarılı....<br />"; 
    }
  catch(PDOException $e)
    {
      echo "Bağlantı Hatası: " . $e->getMessage()."<br />";
    }



 ?>