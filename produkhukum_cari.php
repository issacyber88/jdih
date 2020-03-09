<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pencarian Produk Hukum | JDIH Sulut</title>

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

  <?php include "header.php"; ?>

    <div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-30">

          <h1 class="mb-20">Hasil Pencarian untuk '<?php echo $_GET['cari']; ?>'</h1>
          <form class="search-form mb-20" method="get" action="produkhukum_cari.php">
            <input type="text" placeholder="Kata kunci pencarian Produk Hukum" class="search-input" name="cari">
            <button type="submit" class="search-button btn btn-lg btn-color btn-button">
              <i class="ui-search search-icon"></i>
            </button>
          </form>

          <table class="table table-hover">
              <thead>
                <tr>
                <th>NO.</th>
                <th>BENTUK PERATURAN</th>
                <th>NOMOR PERATURAN</th>
                <th>TENTANG</th>
                <th>TAHUN</th>
                <th>HITS</th>
                <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no=0;
                $sqlgbxz = mysqli_query($con, "SELECT * FROM peraturan, katalog WHERE id_kat = id_peraturan_cat AND nomor LIKE '%$_GET[cari]%' OR tentang_katalog LIKE '%$_GET[cari]%' OR subjek LIKE '%$_GET[cari]%' OR subjek_katalog LIKE '%$_GET[cari]%' OR subjek_abstrak LIKE '%$_GET[cari]%' OR nomor_abstrak LIKE '%$_GET[cari]%' OR tentang_abstrak LIKE '%$_GET[cari]%' OR isi_abstrak LIKE '%$_GET[cari]%' group by id_peraturan");
                while($datagbxz = mysqli_fetch_array($sqlgbxz)){
                  $no=$no+1;
              ?>
                <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $datagbxz['nama_kat']; ?></td>
                <td><?php echo $datagbxz['nomor']; ?></td>
                <td><?php echo $datagbxz['tentang_katalog']; ?></td>
                <td><?php echo $datagbxz['tahun']; ?></td>
                <td><?php echo $datagbxz['count']; ?></td>
                <td><a href="<?php echo $datagbxz['file']; ?>"><b>UNDUH</b></a></td>
                </tr>
              <?php } ?>
               
              </tbody>
              </table>

        </div> <!-- end col -->
        
        <?php include "sidebar.php"; ?>
      
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