<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Login | Lapor Pak</title>
  </head>
  <!-- session login -->
  <?php 

        session_start();
        
        if (isset($_SESSION['login'])){
        //dialihkan
        echo "<script>
        window.location.href='admin_home.php';
        alert('Anda sudah login');
         </script>";
         }
  
  ?>
  <body style="background-color: #2b2b2b">
    <div class="container">
      <div class="position-absolute top-50 start-50 translate-middle">
        <h1 style="color: white" class="text-center">L O G I N</h1>
        <form action="" style="color: white" class="mt-5" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" />
          </div>
          <button type="submit" class="btn" style="background-color: white" name="login">Log In</button>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<?php 

    include 'conn.php';
    if (isset($_POST["login"])){
        if(empty($_POST["username"]) && empty($_POST["password"]))  {

            echo "<script>
            alert('username dan password tidak boleh kosong');
            </script>";
        
        }
        else {
            $username = $_POST['username'];
            $password = ($_POST['password']);
            $hashpw = hash('sha256' , $password);
            
            $login = mysqli_query($conn, "select * from admin where  username  ='$username' and password='$hashpw'   ");
            $cek = mysqli_num_rows($login);
            if ($cek > 0 ) {
                $_SESSION['login'] = $username;
                echo "<script>
                window.location.href='admin_home.php';
                </script>";
            }
            else {
                echo "<script>
                alert('username dan password salah');
                </script>";
            }


        }
    }
   

?>
