<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500;700&display=swap" rel="stylesheet" />
    <title>Admin | Lapor Pak</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php 
      include 'admin_navbar.php';
    ?>
    <!-- Akhir dari Navbar -->
    <!-- content -->
    <div class="container" style="padding-top: 2cm">
      <div class="row mb-5">
        <h3>Lihat Laporan yang telah dibuat</h3>
      </div>
      <div class="row">
      <table class="table table-hover">
     

     <?php 
        include('conn.php');

        $perPage = 5;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $start = ($page > 1 ) ? ($page * $perPage) - $perPage : 0;

        $nomor = $start + 1;
        
        $hasil0 = mysqli_query($conn , ("SELECT * FROM laporan"));
        $total = mysqli_num_rows($hasil0);
        
        $pages = ceil($total/$perPage);

        ?> 

         <thead>
               <tr>
                 <th scope="col"><a href="?" style ="text-decoration : none; color : black;">No</a></th>
                 <th scope="col"> <a href="?sort=kecamatan" style ="text-decoration : none; color : black;">Kecamatan</a> </th>
                 <th scope="col"><a href="?sort=kelurahan" style ="text-decoration : none; color : black;">Kelurahan</a></th>
                 <th scope="col">rw</th>
                 <th scope="col">rt</th>
                 <th scope="col">jalan</th>
                 <th scope="col">keterangan</th>
                 <th scope="col">Lampiran foto</th>
                 <th scope="col">Status </th>
               </tr>
             </thead>
               
        <?php
        
        if (empty($_GET['sort'])){
          $hasil = mysqli_query($conn , ("SELECT laporan.id_laporan, laporan.Kecamatan_laporan, laporan.Kelurahan_laporan, laporan.RW_laporan, laporan.RT_laporan, laporan.Jalan_laporan, laporan.Keterangan, laporan.Gambar, laporan.id_prioritas_laporan,laporan_status.status_laporan, prioritas_laporan.nama_prioritas FROM laporan JOIN laporan_status ON laporan.status_laporan = laporan_status.id_laporan_status JOIN prioritas_laporan ON laporan.id_prioritas_laporan = prioritas_laporan.id_prioritas  Limit $start , $perPage "));
         }
         else if ($_GET['sort'] == 'kecamatan'){
              $hasil = mysqli_query($conn , ("SELECT laporan.id_laporan, laporan.Kecamatan_laporan, laporan.Kelurahan_laporan, laporan.RW_laporan, laporan.RT_laporan, laporan.Jalan_laporan, laporan.Keterangan, laporan.Gambar, laporan.id_prioritas_laporan,laporan_status.status_laporan, prioritas_laporan.nama_prioritas FROM laporan JOIN laporan_status ON laporan.status_laporan = laporan_status.id_laporan_status JOIN prioritas_laporan ON laporan.id_prioritas_laporan = prioritas_laporan.id_prioritas ORDER BY Kecamatan_laporan ASC  Limit $start , $perPage "));
              $sort = $_GET['sort'];
         } else if ($_GET['sort'] == 'kelurahan'){
          $hasil = mysqli_query($conn , ("SELECT laporan.id_laporan, laporan.Kecamatan_laporan, laporan.Kelurahan_laporan, laporan.RW_laporan,laporan.RT_laporan, laporan.Jalan_laporan, laporan.Keterangan, laporan.Gambar, laporan.id_prioritas_laporan, laporan_status.status_laporan, prioritas_laporan.nama_prioritas FROM laporan JOIN laporan_status ON laporan.status_laporan = laporan_status.id_laporan_status JOIN prioritas_laporan ON laporan.id_prioritas_laporan = prioritas_laporan.id_prioritas ORDER BY Kelurahan_laporan ASC  Limit $start , $perPage "));
          $sort = $_GET['sort'];
     }

         
      
         if (mysqli_num_rows($hasil) > 0) {
           
          while ($row = mysqli_fetch_array ($hasil)) {
            echo '<tbody>
            <tr>
              <th scope="row">'. $nomor .'</th>
              <td>'. $row['Kecamatan_laporan'] . '</td>
              <td>'. $row['Kelurahan_laporan'] . '</td>
              <td>'. $row['RW_laporan'] . '</td>
              <td>'. $row['RT_laporan'] . '</td>
              <td>'. $row['Jalan_laporan'] . '</td>';
              echo '  <td>'. $row['Keterangan'] . '</td>';
            echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row['Gambar'] ).'" alt="" style="max-height: 200px ; max-width : 200px;" /></td>' ;   
                $status =  $row['status_laporan'];

                    if ($status == "Terkirim") {
                        $update = 2;
                        echo ' <td> <a  class="btn btn-dark btn-sm" href="update.php?id='.$row['id_laporan'].'&stat='. $update .'&page='.$page.'&prioritas=1" role="button" style=" margin : 3px;" > Terima Prioritas 1 </a> <br>
                        <a  class="btn btn-dark btn-sm" href="update.php?id='.$row['id_laporan'].'&stat='. $update .'&page='.$page.'&prioritas=2" role="button"  style=" margin : 3px;"> Terima Prioritas 2 </a> <br>
                        <a  class="btn btn-dark btn-sm" href="update.php?id='.$row['id_laporan'].'&stat='. $update .'&page='.$page.'&prioritas=3" role="button"  style=" margin : 3px;"> Terima Prioritas 3 </a>
                        
                        
                        </td>
                        </tr>';
                        
                      } elseif ($status == "Diterima") {
                        $update = 3;
                        echo ' <td> <a  class="btn btn-dark btn-sm" href="update.php?id='.$row['id_laporan'].'&stat='. $update .'&page='.$page.'" role="button" > Selesaikan Laporan </a> <br> <b> '.$row['nama_prioritas'].' </b> </td>
                        </tr>';
                      } else {
                        echo ' <td> <b> Laporan Telah Selesai </b> </td>
                        </tr>';
                      }

                $nomor++;             
              }         
             
          ?>     
         
          </tbody>
        </table>
      </div>
      <div class="page" style = "float :right ;">
      <div style ="padding :3px;">
       
      <?php 
       }
      for($i=1; $i <=$pages ; $i++){
      echo '
      
        <a  class="btn btn-dark btn-sm" href="?halaman='.$i.'" role="button" > '.$i.' </a>
     
      ';
          }
       
        
         ?>
          </div>
        
         
          </div>
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