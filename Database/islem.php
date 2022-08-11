<?php
include_once ('db.php');
session_start();
ob_start();


$todoSorgu=$db->prepare("SELECT * FROM todo Where users_id=?");
@$todoSorgu->execute([$_SESSION['kullaniciID']]);
$todoCek=$todoSorgu->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['uyeForm'])){
$signKadi=$_POST['signUsername'];

    if($_POST['signPassword']!==$_POST['repatsignPassword']){

  $_SESSION['error']="Şifreleriniz Uyuşmuyor";
  header("location:../front/sign.php");
  exit();

    }
else {
$signPsswd=md5($_POST['signPassword']);
}

$ekle=$db->prepare("INSERT INTO users VALUES('',?,?)");
$ekle->execute([$signKadi,$signPsswd]);

  if($ekle){
    header("location:../front/login.php?durum=basarili");
  }
  else{
    header("location:sign.php");
    exit();

  }
}


if(isset($_POST['loginForm'])){
  $loginKadi=$_POST['loginUsername'];
  $loginPsswd=md5($_POST['loginPassword']);

  $sorgu=$db->prepare("SELECT * FROM users WHERE kadi=? and psswd=?");
  $sorgu->execute([$loginKadi,$loginPsswd]);
    if($sorgu->rowCount()>0){
      $sorguCek=$sorgu->fetch(PDO::FETCH_ASSOC);
      $_SESSION['KullaniciAdi']=$loginKadi;
      $_SESSION['kullaniciID']=$sorguCek["id"];
      header("location:../backEnd/index.php");
    }
    else {
      $_SESSION['error']="Kullanıcı Adı veya Şifre Hatalı";
      header("location:../front/login.php");
        exit();
    }
  }
if(isset($_POST['addTodo'])){

  $durum=$_POST['addDurum'];
  $baslik=$_POST['addBaslik'];
  $metin=$_POST['addMetin'];

  $addTodo=$db->prepare("INSERT INTO todo (baslik,metin,durum,users_id) VALUES(?,?,?,?)");
  $addTodo->execute([$baslik,$metin,$durum,$_SESSION['kullaniciID']]);

  if($addTodo){
    $_SESSION['error']="Yapılacaklara Eklendi";
    header("location:../backEnd/addTodo.php");

  }
}

if(isset($_GET['id']) && $_GET['islem']=="sil"){

  $addTodo=$db->prepare("DELETE FROM todo WHERE id=?");
  $addTodo->execute([$_GET['id']]);

  if($addTodo){
    header("location:../backEnd/index.php?durum=basarili");

  }
}




?>
