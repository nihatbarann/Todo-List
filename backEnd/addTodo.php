<?php
include('../Database/islem.php');
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
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <form class="d-flex" role="search">
            <a class="btn btn-primary text-light me-2" aria-current="page" href="index.php">Yapılacaklar</a>
            <a href="addTodo.php" class="btn btn-success text-light me-2">Yapılacak Ekle</a>
            <a href="logout.php" class="btn btn-light text-dark me-2">Çıkış </a>
          </form>
        </div>
      </div>
    </nav>
<div class="container py-5 mt-5">
  <div class="row">
    <div class="col-md-5 mx-auto">
    <div class="card bg-white">
  <div class="card-header">
    <h5 class="card-title ">Yapılacak Ekle</h5>
  </div>
  <div class="card-body">
    <?php
    if(isset($_SESSION['error'])){ ?>
    <div class="alert alert-success mt-3"><?php echo $_SESSION['error'] ?></div>
  <?php  }?>
    <form action="../Database/islem.php" method="post">
      <!-- Name input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Başlık</label>
        <input type="text" id="form4Example1" class="form-control" name="addBaslik" required/>
      </div>
      <!-- Message input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Metin</label>
        <textarea class="form-control" id="form4Example3" rows="4" name="addMetin" required></textarea>
      </div>

      <div class="form-outline mb-4">
        <select class="form-select" aria-label="Default select example" name="addDurum">
              <option selected>Durum Seçiniz</option>
              <option value="1">Yapılacak</option>
              <option value="2">Yapılıyor</option>
              <option value="3">Yapıldı</option>
            </select>
      </div>
      <button type="submit" name="addTodo" class="btn btn-success btn-block mb-4">Ekle</button>
      <button type="reset"  class="btn btn-danger btn-block mb-4">Sıfırla</button>

    </form>
  </div>
</div>
</div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

  </body>
</html>
<?php
$_SESSION['error'] =null;
?>
