<?php
include '../Database/islem.php';
if(!isset($_SESSION['KullaniciAdi'])){
  header("location:../front/login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Todo List</a>
          <form class="d-flex" role="search">
            <a class="btn btn-primary text-light me-2" aria-current="page" href="index.php">Yapılacaklar</a>
            <a href="addTodo.php" class="btn btn-success text-light me-2">Yapılacak Ekle</a>
            <a href="logout.php" class="btn btn-light text-dark me-2">Çıkış </a>
          </form>
        </div>
      </div>
    </nav>
<div class="container mt-5 py-5">
  <div class="row">
    <?php foreach ($todoCek as $value) { ?>
    <div class="col-md-5 mx-auto">
    <div class="card bg-white">
  <div class="card-header bg-dark text-white">

    <h5 class="card-title "><?php echo $value['baslik'] ?></h5>
  </div>

  <div class="card-body">
    <p class="card-text"><?php echo $value['metin'] ?></p>
<div>
  <hr>
    <a href="../Database/islem.php?islem=sil&id=<?php echo $value['id'] ?>" class="btn btn-danger text-light me-2">Sil</a>
    <a href="#" class="btn btn-primary text-light me-2">Düzenle</a>
    <span class=""> Oluşturma Tarihi: <?php echo $value['tarih'] ?></span>
  </div>
</div>
</div>
</div>
<?php } ?>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>
