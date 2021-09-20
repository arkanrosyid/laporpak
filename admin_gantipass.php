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

  <?php 
      include 'admin_navbar.php';
    ?>
   
    <!-- content -->
    <div class="container" style="padding-top: 2cm">
      <div class="row mb-5">
        <h1>Ganti Password</h1>
      </div>
      <form action="" method="POST">
        <div class="row mt-3">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" style="width: 10cm" id="exampleFormControlInput1" placeholder="Masukan Laporan anda disini" name="email" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password lama</label>
            <input type="password" class="form-control" style="width: 10cm" id="exampleFormControlInput1" placeholder="Masukan Password lama anda" name="password_lama" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password Baru</label>
            <input type="password" class="form-control" style="width: 10cm" id="exampleFormControlInput1" placeholder="Masukan Password baru anda"name="password_1" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" style="width: 10cm" id="exampleFormControlInput1" placeholder="Konfirmasi Password anda" name="password_2"/>
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-primary" style="width: 4cm" value="Ganti Password" name="submit" />
          </div>
        </div>
      </form>
    </div>
    <!-- akhir dari content -->

    <!-- footer -->
    <!-- Footer -->
    <footer class="footer shadow-lg mt-5" style="background-color: #ffffff; min-height: 80px; min-width: 100%; position: fixed; bottom: 0; left: 0">
      &nbsp;
      <p class="text-center fw-bold">Copyright Lapor Pak | 2021</p>
    </footer>
    <!-- akhir dari footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

    include 'conn.php';
    if (isset($_POST['submit'])){
        if(empty($_POST['email'])&& empty($_POST['password_lama'])&& empty($_POST['password_1'])&& empty($_POST['password_2'])) {
            echo "<script>
            alert('Field Tidak boleh kosong');
             </script>";
        }else if($_POST['password_1'] != $_POST['password_2']){
            echo "<script>
            alert('Password Tidak Sama');
             </script>";
        }elseif($_POST['password_1'] == $_POST['password_lama']){
            echo "<script>
            alert('Password Tidak boleh sama dengan password yang lama!');
             </script>";
        }
        else if($_POST['password_1'] == $_POST['password_2']) {

            $email = $_POST['email'];
            $password_lama = $_POST['password_lama'];

            $hashpw_lama = hash('sha256' , $password_lama);
            
            $login = mysqli_query($conn, "select * from admin where  email  ='$email' and password='$hashpw_lama'   ");
            $cek = mysqli_num_rows($login);
            if ($cek > 0 ) {
              
                $password_1 =$_POST['password_1'];
                $hashpw_1 =  hash('sha256' , $password_1);
                // $password_2 = $_POST['password_2'];
                // $hashpw_2 = hash('sha256' , $password_1);

                $conn -> query ("UPDATE `admin` SET `password`='$hashpw_1' WHERE email='$email'");

                echo "<script>
                    alert('Berhasil merubah password');
                </script>";
            }
            else {
                echo "<script>
                alert('Email dan Password Salah!');
                </script>";
            }



        }

    }

?>