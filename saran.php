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
        <div class="col-md-8">
            <form class="border p-5 rounded">
              <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" autocomplete="off">
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Saran Topik Masalah</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" autocomplete="off">
                </div>
              </div>
              <div class="row mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Penjelasan Saran Topik Masalah</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      
                <button class="btn btn-primary" type="button">Kirim</button>
               </div>
    </form>
        </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>