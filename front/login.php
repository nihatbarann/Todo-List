<?php include '../Database/islem.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Giriş Yap</title>
    <style>
        body.bg-dark{
            background: #181818!important;
        }
    </style>
</head>
<body class="bg-light">
<div class="d-flex align-items-center justify-content-center p-4"><img height="" src="kodl.png" alt=""></div>
<div  class="container d-flex align-items-center justify-content-center">
    <div class="card bg-light" style="width: 18rem;">
        <div class="card-header bg-primary">
            Giriş Yap
        </div>
        <div class="card-body">
            <?php if(isset($_GET['durum']) && $_GET['durum']=="basarili"){ ?>
              <div class="alert alert-success">Kayıt Başarılı Giriş Yapabilirsiniz</div>
        <?php }?>
        <?php if(isset($_SESSION['error'])){ ?>
          <div class="alert alert-danger"><?php echo $_SESSION['error'] ?></div>
        <?php }?>

            <form action="../Database/islem.php" method="post">
                <label for="username" class="text-success">Kullanıcı Adınız</label>
                <input type="text" name="loginUsername" class="form-control">
                <label for="password" class="text-success">Şifreniz</label>
                <input type="password" name="loginPassword" class="form-control mb-4">
                <label>Üye değilseniz hemen <a href="sign.php">ÜYE OL</a></label>
                <hr>
                <button class="btn btn-success mb-4 w-100" name="loginForm" type="submit">Giriş Yap</button>
            </form>
        </div>

    </div>
</div>
</body>
</html>

 <?php
$_SESSION['error']=null;
 ?>
