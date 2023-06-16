<?php 
session_start();
require 'function.php';

if(isset($_POST['kirim'])){
  
  if(registrasi($_POST)>0){
    $_SESSION['registrasi'] = true;
    echo "<script> alert('Registrasi Anda Telah Berhasil')
          document.location.href = 'saran.php';
    </script>";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
   
  </head>
  <body>

  <!-- navbar -->
  <nav class="navbar bg-light border-bottom border-primary border-2">
    <div class="container">
     
        <img src="https://www.petpals.com/wp-content/themes/petpals/img/pet-pal-logo.png?1" alt="Bootstrap" width="180" height="89">
      
    </div>
  </nav>
  <!-- navbar end  -->

  <div class="container container-fluid custom-container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="border p-5 rounded" action="" method="POST">
              <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name="username" autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name=email autocomplete="off">
                </div>
              </div>
              <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                </div>
              </div>
                <div class="row mb-3">
                  <label for="konfirmasi_password" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" autocomplete="off">
                  </div>
                </div>

               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      
                <button class="btn btn-primary" type="submit" name="kirim">Kirim</button>
               </div>
    </form>
        </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>