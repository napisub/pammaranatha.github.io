<?php 
// session_start();
// koneksi ke database
$koneksi = new mysqli("localhost","root","","pamara");
?>

<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/pam.png">
    <title>Profil | PAM Maranatha Polimak</title>

  </head>
  <body id="home">


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">PAM MARANATHA POLIMAK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/index.php">login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->

    <section class="jumbotron text-center">
      <img src="img/pam.png" alt="Logo PAM" width="200" class="rounded-circle img-thumbnail">
      <h1 class="display-4">PAM MARANATHA POLIMAK</h1>
      <p class="lead"></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,117.3C384,139,480,181,576,165.3C672,149,768,75,864,58.7C960,43,1056,85,1152,101.3C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    
    <!-- akhir jumbotron -->

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Information</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <?php $ambil = $koneksi->query("SELECT * FROM about "); ?>
          <?php while($perabout = $ambil->fetch_assoc()){ ?>
            <div class="col-md-10" data-aos="fade-right" data-aos-duration="1000">
              <p class="card-text"><?php echo $perabout['deskripsi']; ?></p>
            </div>

            <!-- <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200"> 
              <p>
                <a href="https://www.appsheet.com/start/0400b05a-2948-4eae-86f9-d2f88dfae266#table=DATABASE%20PAM&page=form" target="_blank">Database PAM Maranatha</a><br>

              </p>
            </div> -->
          <?php } ?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,256L48,240C96,224,192,192,288,181.3C384,171,480,181,576,202.7C672,224,768,256,864,250.7C960,245,1056,203,1152,176C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- akhir about -->

    <!-- projects -->

    <section id="projects">

      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Gallery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php $ambil = $koneksi->query("SELECT * FROM gallery "); ?>
          <?php while($pergallery = $ambil->fetch_assoc()){ ?>

            <div class="col-md-4 mb-3">
              <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
                <img src="img/projects/<?php echo $pergallery['file']; ?>" height="200">
                <div class="card-body">
                  <h5 class="text-uppercase"><?php echo $pergallery['nama_gallery']; ?></h5>
                  <p class="card-text"><?php echo $pergallery['deskripsi']; ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,101.3C384,107,480,149,576,165.3C672,181,768,171,864,149.3C960,128,1056,96,1152,85.3C1248,75,1344,85,1392,90.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    </section>
    <!-- akhir projects -->

    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
              <strong>Terima Kasih</strong> pesan anda sudah kami terima. Shaloom.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="email" class="form-control" id="name" aria-describedby="name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,224L48,234.7C96,245,192,267,288,250.7C384,235,480,181,576,176C672,171,768,213,864,234.7C960,256,1056,256,1152,229.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    </section>
    <!-- akhir contact -->

    <!-- footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>&copy; <?= date('Y') ?> Powered by <a href="https://www.instagram.com/napi.sup" target="_blank"><span class="text-white fw-bold">Napi Sup</span></a><br>
        <a href="https://web.facebook.com/pammaranatha" target="_blank"><i class="bi bi-facebook text-light"></i></a>
        <a href="https://www.instagram.com/pammaranatha/" target="_blank"><i class="bi bi-instagram text-danger"></i></a>
        <a href="https://vt.tiktok.com/ZSecmwQ4r/" target="_blank"><i class="bi bi-tiktok text-info"></i></a>
        <a href="https://www.youtube.com/channel/UCf_YtZXC0VeSbQ6etFPTM2g" target="_blank"><i class="bi bi-youtube text-danger"></i></a>
      </p>
    </footer>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>

    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>
    <script>

      gsap.registerPlugin(TextPlugin);
      gsap.to('.lead', { duration: 10, delay: 1.5, text:'Gereja Kristen Injili di Tanah Papua | Klasis Port Numbay | Jemaat Maranatha Ardipura I-III | Persekutuan Anggota Muda.'})
      gsap.from('.navbar', { duration: 1.5, y: '-100%', opacity:0, ease:'bounce'});
      gsap.from('.jumbotron img', { duration: 1, rotateY: 360, opacity:0 });
      gsap.from('.display-4', { duration: 1, x: -50, opacity:0, delay: 0.5, ease:'back' });

    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  </body>
  </html>