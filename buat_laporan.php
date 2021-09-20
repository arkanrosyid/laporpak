<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500;700&display=swap" rel="stylesheet" />
    <title>Tentang Kami | Lapor Pak</title>
  </head>
  <body>
     <!-- Navbar -->
     <?php 
      include 'navbar.php';
    ?>
    <!-- Akhir dari Navbar -->
    <!-- content -->
    <div class="container" style="padding-top: 2cm">
      <div class="row mb-5">
        <h1>Buat Laporan Baru</h1>
      </div>
      <form action="buat_laporann.php" method="POST" enctype="multipart/form-data">
        <h2>Formulir Pelapor</h2>
        <div class="row mt-3">
          <div class="mb-3">
            <!-- NAMA -->
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" style="width: 10cm" id="nama" placeholder="Masukan Nama anda disini" name = "nama"  required />
            <small style="color: #dd3131;">*wajib diisi</small>
          </div>
          <!-- E-Mail -->
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" style="width: 10cm" id="email"  name = "email" placeholder="contoh@mail.com"  />
          </div>
          <!-- HP/WA -->
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomor HP/WA</label>
            <input type="tel" pattern="[0-9]{11,13}" class="form-control" style="width: 10cm" id="nomor" name = "nomor"  placeholder="08xxxxxxxxxx" required/>
            <small style="color: #dd3131;">*wajib diisi</small>
          </div>
          <!-- KECAMATAN -->
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" style="width: 10cm" id="kecamatan"  name = "kecamatan" placeholder="Masukan Kecamatan anda disini" required/>
            <small style="color: #dd3131;">*wajib diisi </small>
          </div>
          <!-- KELURAHAN -->
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kelurahan /desa</label>
            <input type="text" class="form-control" style="width: 10cm" id="kelurahan" name = "kelurahan"  placeholder="Masukan Kelurahan anda disini" required/>
            <small style="color: #dd3131;">*wajib diisi</small>
          </div>
          <!-- FORMULIR -->
          <h2>Formulir Laporan</h2>
          <div class="container ms-5">
            <!-- KECAMATAN -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
              <input type="text" class="form-control" style="width: 10cm" id="kecamatan_laporan" name = "kecamatan_laporan"  placeholder="Masukan Laporan anda disini" />
              <small style="color: #dd3131;">*wajib diisi</small>
            </div>
            <!-- KELURAHAN -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kelurahan /desa</label>
              <input type="text" class="form-control" style="width: 10cm" id="kelurahan_laporan" name = "kelurahan_laporan" placeholder="Masukan Laporan anda disini" required>
              <small style="color: #dd3131;">*wajib diisi</small>
            </div>
            <!-- RW -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">RW</label>
              <input type="tel" pattern="[0-9]{1,2}" class="form-control" style="width: 10cm" id="rw_laporan" name = "rw_laporan"  placeholder="RW" required >
              <small style="color: #dd3131;">*wajib diisi</small>
            </div>
            <!-- RT -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">RT</label>
              <input type="tel"pattern="[0-9]{1,2}" class="form-control" style="width: 10cm" id="rt_laporan"name = "rt_laporan"  placeholder="RT" required>
              <small style="color: #dd3131;">*wajib diisi</small>
            </div>
            <!-- Jalan -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Jalan</label>
              <input type="text" class="form-control" style="width: 10cm" id="jalan_laporan" name = "jalan_laporan"  placeholder="Jl . xxxxxxx" required>
              <small style="color: #dd3131;">*wajib diisi</small>
            </div>
            <!-- Laporan -->
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Jelaskan Laporan anda</label>
              <textarea class="form-control" id="keterangan_laporan" name = "keterangan_laporan" rows="3" required></textarea>
              <small style="color: #dd3131;">*wajib diisi</small>
            </div>
            <!-- Gambar -->
            <div class="mb-3">
              <label for="formFile" class="form-label">Masukan Gambar</label>
              <input class="form-control" type="file" style="width: 10cm" id="formFile" name="formFile" required>
              <small style="color: #dd3131;">*wajib diisi</small>
            </div>
          </div>
          <!-- INPUT -->
          <div class="mb-3">
            <input type="submit" name="submit" class="btn btn-primary" style="width: 4cm" value="Buat Laporan" />
          </div>
        </div>
      </form>
    </div>
    <!-- akhir dari content -->

    <!-- footer -->
    <!-- Footer -->
    <footer class="footer shadow-lg mt-5" style="background-color: #ffffff; min-height: 80px; min-width: 100%; position: relative; bottom: 0; left: 0">
      &nbsp;
      <p class="text-center fw-bold">Copyright Lapor Pak | 2021</p>
    </footer>
    <!-- akhir dari footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
