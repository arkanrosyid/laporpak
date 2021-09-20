  <!-- Navbar -->
  <?php
      
      session_start();
    
       
      ?>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #2e2d2d">
      <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="index.php">Lapor Pak</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="alur.php">Alur</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Lapor </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="buat_laporan.php">Buat Laporan</a></li>
                <li><a class="dropdown-item" href="lihat_laporan.php">Riwayat Laporan</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">Tentang Kami</a>
            </li>
            <?php  
              if (isset($_SESSION['login'])){
              ?>
               <li class="nav-item">
              <a class="nav-link" href="admin_home.php">Halaman Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="break.php">Log-out</a>
            </li>
            <?php }?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir dari Navbar -->