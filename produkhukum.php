<!DOCTYPE html>
<html lang="en">
<head>
  <title>Produk Hukum | JDIH Sulut</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Lazyload -->
  <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light single-post">

  <?php 
    include "header.php"; 
    $sqlgbx = mysqli_query($con, "SELECT * FROM katalog WHERE id_kat = '$_GET[kat]'");
    $datagbx = mysqli_fetch_array($sqlgbx);
  ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(img/blog/about.jpg);">
      <div class="full-overlay"></div>
      <div class="container">
        <div class="page-title__holder">
          <h1 class="page-title__title"><?php echo $datagbx['kategori_kat']; ?></h1>
          <p class="lead white">JDIH | Pemerintah Provinsi Sulawesi Utara</p>
        </div>        
      </div>
    </section>

    <div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-12 blog__content mb-30">          
          <div class="row">
            <div class="col-md-12 mb-30">
              <h2><?php echo $datagbx['kategori_kat']; ?></h2>
              <hr>
              <div class="container">
            <br>
              <br>   
              <table class="table table-hover">
              <thead>
                <tr>
                  <th>NO.</th>
                <th>NAMA KATALOG</th>
                <th>JUMLAH PERATURAN</th>
                
                </tr>
              </thead>
              <tbody>
              <?php
                $no=0;
                $sqlgbxz = mysqli_query($con, "SELECT * FROM peraturan, katalog WHERE id_kat = id_peraturan_cat AND id_peraturan_cat = '$_GET[kat]' group by tahun order by tahun DESC");
                while($datagbxz = mysqli_fetch_array($sqlgbxz)){
                  $sqlgbxza = mysqli_query($con, "SELECT count(id_peraturan) as cek FROM peraturan WHERE id_peraturan_cat = '$datagbxz[id_kat]' AND tahun = '$datagbxz[tahun]' group by tahun order by tahun DESC");
                  $datagbxza = mysqli_fetch_array($sqlgbxza);
                  $no=$no+1;
              ?>
                <tr>
                <td><?php echo $no; ?></td>
                <td><b><a href="produkhukum_detail.php?kat=<?php echo $datagbxz['id_kat']; ?>&tahun=<?php echo $datagbxz['tahun']; ?>"><?php echo $datagbxz['kategori_kat']; ?> Tahun <?php echo $datagbxz['tahun']; ?></a></b></td>
                <td><?php echo $datagbxza['cek']; ?></td>
                </tr>
              <?php } ?>
               
              </tbody>
              </table>
            </div>           
            </div>
          </div>

        </div> <!-- end col -->
      
      </div> <!-- end content -->
    </div> <!-- end main container -->

    <?php include "footer.php"; ?>

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->

  
  <!-- jQuery Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/owl-carousel.min.js"></script>
  <script src="js/twitterFetcher_min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/jquery.appear.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>