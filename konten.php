<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profil | JDIH Sulut</title>

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
    $sqlgbx = mysqli_query($con, "SELECT * FROM content WHERE id_content = '$_GET[id]'");
    $datagbx = mysqli_fetch_array($sqlgbx);
  ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(img/blog/about.jpg);">
      <div class="full-overlay"></div>
      <div class="container">
        <div class="page-title__holder">
          <h1 class="page-title__title"><?php echo $datagbx['nama_content']; ?></h1>
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
              <h2><?php echo $datagbx['nama_content']; ?></h2>
              <hr>
              <p class="lead mb-20"><?php echo $datagbx['isi_content']; ?></p>             
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