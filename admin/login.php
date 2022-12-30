<?php 
session_start();
$koneksi = new mysqli("localhost","root","","pamara");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/pam.png">
  <title>Login Admin</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/custom.css"> 
  <!-- my css -->
  <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container">
      <div class="row justify-content-center">
        <br>
        <div class="col-md-6 mb-4">
          <h2>Hallo Sobat </h2>
          "Jangan seorang pun menganggap engkau rendah karena engkau muda. Jadilah teladan bagi orang-orang percaya, dalam perkataanmu, dalam tingkah lakumu, dalam kasihmu dan dalam kesucianmu". <h5>(1 Timotius 4:12)</h5>
          <img src="../img/maranatha.jpg" width="100%" height="400"><br>
          <label class="text-muted">Alamat :</label><br>
          <label class="text-muted">No.Telp:</label>
          

        </div>


        <div class="col-md-4 mb-4">
          <div class="text-center">
            <img src="../img/pam.png"
            style="width: 185px;" alt="logo">
            <h4 class="mt-1 mb-5 pb-1 text-muted">ADMIN | PAM MARANATHA POLIMAK</h4>
          </div>

          <form role="form" method="post">
            <p>Please login to your account</p>

            <div class="form-outline mb-4">
             <label class="form-label" for="form2Example11">Username</label>
             <input type="text" id="Username" name="user" class="form-control" required />

           </div>

           <div class="form-outline mb-4">
             <label class="form-label" for="form2Example22">Password</label>
             <input type="password" id="Password" name="pass" class="form-control" required />

           </div><br>

           <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="login">Login</button>
            <a href="../index.php" class="btn btn-info btn-block fa-lg mb-3">Halaman Utama</a>
                    <!-- <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div> -->

                </form>
                <?php 
                if (isset($_POST['login'])) 
                {
                  // code...
                  $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password = '$_POST[pass]'");
                  $yangcocok = $ambil->num_rows;
                  if ($yangcocok==1)
                  {
                    $_SESSION['admin']=$ambil->fetch_assoc();
                    echo "<div class='alert alert-success'>Login Sukses</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                  }
                  else
                  {
                    echo "<div class='alert alert-danger'>Login Gagal</div>";
                    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                  }
                }

                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>