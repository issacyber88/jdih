<!DOCTYPE html>
<html lang="en">
<head>
  <title>Artikel | JDIH Sulut</title>

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

          <div class="title-wrap">
            <h1>Artikel</h1>
          </div>

          <div class="row">
            <?php
              $sqlv = mysqli_query($con, "SELECT * FROM artikel WHERE status = '1' ORDER BY id_artikel DESC");
              while($datav = mysqli_fetch_array($sqlv)){
            ?>
            <div class="col-md-6">
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="artikel_detail.php?id=<?php echo $datav['id_artikel']; ?>">
                    <div class="thumb-container thumb-75">
                      <img data-src="<?php echo $datav['gambar']; ?>" src="<?php echo $datav['gambar']; ?>" class="entry__img lazyload" alt="">
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title">
                      <a href="artikel_detail.php?id=<?php echo $datav['id_artikel']; ?>"><?php echo $datav['judul']; ?></a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <i class="ui-author"></i>
                        <a href="#"><?php echo $datav['add_by']; ?></a>
                      </li>
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        <?php echo date("d F, Y", strtotime($datav['tanggal'])); ?>
                      </li>
                      <!--
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">115</a>
                      </li>
                    -->
                    </ul>
                  </div>
                  <div class="entry__excerpt">
                    <p>
                      <?php
                              $string = strip_tags($datav['isi_artikel']);
                              if (strlen($string) > 200) {
                                $stringCut = substr($string, 0, 150);
                                $endPoint = strrpos($stringCut, ' ');
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $string .= '...';
                              }
                              echo $string;
                                
                              ?>
                    </p>
                  </div>
                </div>
              </article>
            </div>
          <?php } ?>
            
          </div>

          <!-- Pagination -->
          <nav class="pagination">
            <span class="pagination__page pagination__page--current">1</span>
            <a href="#" class="pagination__page">2</a>
            <a href="#" class="pagination__page">3</a>
            <a href="#" class="pagination__page">4</a>
            <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
          </nav>

        </div> <!-- end col -->
        
        <?php include "sidebar_news.php"; ?>
      
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