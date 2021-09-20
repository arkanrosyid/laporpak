<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  
<?php 
include 'conn.php';

if(isset($_POST['submit'])) {

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nomor'];
        $kec = $_POST['kecamatan'];
        $kel = $_POST['kelurahan'];
        $keckel = $kec .''. $kel ;
        $kec_laporan = $_POST['kecamatan_laporan'];
        $kel_laporan = $_POST['kelurahan_laporan'];
        $rw_laporan = $_POST['rw_laporan'];
        $rt_laporan = $_POST['rt_laporan'];
        $jalan_laporan = $_POST['jalan_laporan'];
        $keterangan = $_POST['keterangan_laporan'];
        $status = 1;
        $prioritas = 4;
        $image = addslashes(file_get_contents($_FILES['formFile']['tmp_name']));

        $conn -> query("INSERT INTO `laporan`( `nama_pelapor`, `email_pelapor`, `nohp_pelapor`, `kec&kel_pelapor`, `Kecamatan_laporan`, `Kelurahan_laporan`, `RW_laporan`, `RT_laporan`, `Jalan_laporan`, `Keterangan`, `Gambar`, `status_laporan`, `id_prioritas_laporan`) 
        VALUES ('$nama' , '$email' ,'$nohp' , '$keckel' , '$kec_laporan ' , '$kel_laporan' , '$rw_laporan' , '$rt_laporan' , '$jalan_laporan' , ' $keterangan' , '$image' , '$status' , '$prioritas')");
         
         echo "<script>
         window.location.href='lihat_laporan.php';
         alert('Berkas sudah dikirim. Terima kasih sudah melapor');
          </script>";
          
        
        

      
    }
    else {
        echo "<script>
        window.location.href='buat_laporan.html';
        alert('Terdapat kesalahan pada pengiriman berkas!!!'); 
        </script>";
        
        
    }

?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>