<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webbsite Galeri Foto</title>
  <link rel="stylesheet" type="text/css" href="Aset/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">Website Galeri foto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto ">
        </div>
        <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
        <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
      </div>
    </div>
  </nav>

  <div class="container py-5">
    <container class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body bg-light">
            <div class="text-center">
              <h5>Daftar Akun Baru</h5>
            </div>
            <form action="config/aksi_register.php" method="POST">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required>
              <label class="form-label">Password</label>
              <input type="Password" name="password" class="form-control" required>
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
              <label class="form-label">Nama Lengkap</label>
              <input type="text" name="namalengkap" class="form-control" required>
              <label class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" required>
              <div class="d-grid mt-2">
                <button class="btn btn-primary" type="sumbit" name="kirim">DAFTAR</button>
              </div>
            </form>
            <hr>
            <p>Sudah punya akun? <a href="login.php">Login disini!</a></p>
          </div>
        </div>
      </div>
  </div>
  </div>
  <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; RPL XII | WEB GALERY FOTO</p>



    <script>
      type = "text/javascripct"
      src = "Aset/js/bootstrap.min.js" >
    </script>
</body>

</html>