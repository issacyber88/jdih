<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kontak | JDIH Sulut</title>

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

    $sql7 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'map'");
    $datamap = mysqli_fetch_array($sql7);
    
    $sql8 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'fax'");
    $datafax = mysqli_fetch_array($sql8);
    
    $sql9 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'informasi kontak'");
    $datakontak = mysqli_fetch_array($sql9);

    if(!isset($_POST['kontak'])){
      $sqlg = "INSERT INTO contact VALUES(null, '$_POST[nama]', '$_POST[email]', '$_POST[pesan]', '$_POST[judul]', NOW(), 'Belum')";
      $cek = mysqli_query($con, $sqlg); 

      if($cek){
        ?>
        <script type="text/javascript">
          alert("Pesan telah dikirim!"); 
        </script>
        <?php
      }else{
        ?>
        <script type="text/javascript">
          alert("Pesan gagal dikirim!"); 
        </script>
        <?php
      }
    }
  ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(img/blog/about.jpg);">
      <div class="full-overlay"></div>
      <div class="container">
        <div class="page-title__holder">
          <h1 class="page-title__title">Kontak</h1>
          <p class="lead white">JDIH | Pemerintah Provinsi Sulawesi Utara</p>
        </div>        
      </div>
    </section>
    
        
    
    <div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-12 blog__content mb-30">          
          <div class="row justify-content-md-center">
            <div class="col-lg-6">

              <h3>Kirimkan Pesan</h3>
              
              <!-- Contact Form -->
              <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="kontak.php">
                <div class="contact-name">
                  <label for="name">Nama <abbr title="required" class="required">*</abbr></label>
                  <input name="nama" id="name" type="text" placeholder="Masukkan Nama Anda.." required>
                </div>
                <div class="contact-email">
                  <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                  <input name="email" id="email" type="email" placeholder="Masukkan Email Anda.." required>
                </div>
                <div class="contact-subject">
                  <label for="email">Judul</label>
                  <input name="judul" id="subject" type="text" placeholder="Masukkan Judul Pesan.." required>
                </div>
                <div class="contact-message">
                  <label for="message">Pesan <abbr title="required" class="required">*</abbr></label>
                  <textarea id="message" name="pesan" rows="7" placeholder="Ketik Isi Pesan.." required></textarea>
                </div>

                <input type="submit" class="btn btn-lg btn-color btn-button" value="Kirim Pesan" name="kontak">
                <div id="msg" class="message"></div>
              </form>

            </div>
            <div class="col-lg-6">

              <h3>Peta Lokasi</h3>
              <br>
              <iframe src="<?php echo $datamap['isi_inf']; ?>" width="100%" height="450px"></iframe>

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