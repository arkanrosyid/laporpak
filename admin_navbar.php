 
 <?php
      session_start();
         if (empty($_SESSION['login'])){
          echo "<script>
          window.location.href='index.php';
          alert('Anda belum login');
           </script>";

         }
 ?>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #2e2d2d">
      <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="admin_home.php">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin_gantipass.php">Ganti Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="break.php">Log-out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir dari Navbar -->