<?php
  $host="localhost";
  $dbname="todos";
  $kadi="root";
  $psswd="";
  try {
    $db=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$kadi,$psswd);
  } catch (\Exception $e) {
  echo $e->getMessage();
  }



?>
