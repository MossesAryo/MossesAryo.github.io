<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>My portofolio | Mosses Aryo Bimo</title>
  </head>
  <body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
      <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html"> < Kembali</a>
            </li>        
          </ul>
        </div>
        <a class="navbar-brand position-absolute top-50 start-50 translate-middle" href="#">Data Yang Dikirim</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </div>
    </nav>

    <!-- Akhir Navbar -->
     <!-- Tabel guestbook -->
    <div class="container mt-5 pt-5 bg-gray rounded-3">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <?php
          if (isset($_POST['Input'])) {
            $nama = $_POST['nama'];
            $jenkel = $_POST['jenkel'];
            $email = $_POST['email'];
            $hp = $_POST['hp'];
            $saran = $_POST['saran'];
          ?>
          <div class="table-responsive">
            <table class="table table-striped table-bordered shadow-sm">
              <thead class="table-dark">
                <tr>
                  <th scope="col">Field</th>
                  <th scope="col">Data</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><i class="bi bi-person-circle me-2"></i><strong>Nama Anda:</strong></td>
                  <td><?php echo $nama; ?></td>
                </tr>
                <tr>
                  <td><i class="bi bi-gender-ambiguous me-2"></i><strong>Jenis Kelamin Anda:</strong></td>
                  <td><?php echo $jenkel; ?></td>
                </tr>
                <tr>
                  <td><i class="bi bi-envelope-fill me-2"></i><strong>Email Anda:</strong></td>
                  <td><?php echo $email; ?></td>
                </tr>
                <tr>
                  <td><i class="bi bi-phone-fill me-2"></i><strong>No Handphone:</strong></td>
                  <td><?php echo $hp; ?></td>
                </tr>
                <tr>
                  <td><i class="bi bi-chat-right-text-fill me-2"></i><strong>Kritik / Saran Anda:</strong></td>
                  <td><?php echo nl2br($saran); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <?php
          } 
          ?>
        </div>
      </div>
    </div>
    <!-- Akhir Guest Book -->

    <!-- Footer -->
  <footer class="bg-dark text-white text-center pb-3  pt-3" style="margin-top:210px; " >
      <p>Created With <i class="bi bi-heart-fill text-danger"></i> By <a href="https://www.instagram.com/mz.tzx/profilecard/?igsh=OG0yOXo3a3Y2c245" class="text-white fw-bold">Mosses Aryo Bimo</a></p>
    </footer>

  </body>
 
</html>
