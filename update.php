<?php 
       session_start();
       if (empty($_SESSION['login'])){
        echo "<script>
        window.location.href='index.php';
        alert('Anda belum login');
         </script>";
       }
       $id_laporan = $_GET['id'];
       $stat_laporan =$_GET['stat'];
       $page = $_GET['page'];
       $prioritas = $_GET['prioritas'];


      //  echo $id_laporan .' ' . $stat_laporan.' '  . $page.' '  . $prioritas;

       include 'conn.php';

       $conn -> query ("UPDATE `laporan` SET `status_laporan`='$stat_laporan' ,  `id_prioritas_laporan`='$prioritas' WHERE id_laporan='$id_laporan'");
      
  
       echo "<script>
       window.location.href='admin_home.php?halaman=".$page."';
       alert('Laporan telah diperbarui');
        </script>";

        
?>