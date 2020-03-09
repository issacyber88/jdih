<!DOCTYPE html>
<html lang="en">
<head>
  <title>JDIH Sulawesi Utara</title>

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

<body class="bg-light">

  <?php include "header.php"; ?>

    <!-- Trending Now -->
    <div class="trending-now">
      <div class="container relative">
        <span class="trending-now__label">Trending</span>
        <ul class="newsticker">
          <?php
              $sqlv = mysqli_query($con, "SELECT * FROM berita WHERE status = '1' ORDER BY id_berita DESC LIMIT 0,10");
              while($datav = mysqli_fetch_array($sqlv)){
          ?>
          <li class="newsticker__item"><a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>" class="newsticker__item-url"><?php echo $datav['judul']; ?></a></li>
          <?php } ?>        
        </ul>
        <div class="newsticker-buttons">
          <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
          <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>        
      </div>
    </div>    

    <!-- Featured Posts Grid -->      
    <section class="featured-posts-grid bg-dark">
      <div class="container clearfix">
        
        <!-- Large post slider -->
        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
          <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">

            <?php
              $sqlv = mysqli_query($con, "SELECT * FROM berita, bagian WHERE id_bag = idp_bb AND status = '1' ORDER BY id_berita DESC LIMIT 0,5");
              while($datav = mysqli_fetch_array($sqlv)){
            ?>
            <article class="entry featured-posts-grid__entry">
              <div class="thumb-bg-holder owl-lazy" data-src="<?php echo $datav['gambar']; ?>">
                <img src="<?php echo $datav['gambar']; ?>" alt="" class="d-none">
                <a href="#" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>

              <div class="thumb-text-holder">
                <a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad"><?php echo $datav['nama_bag']; ?></a>   
                <h2 class="thumb-entry-title">
                  <a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>"><?php echo $datav['judul']; ?></a>
                </h2>
              </div>
            </article>
          <?php } ?>
            
          </div> <!-- end owl slider -->
        </div> <!-- end large post slider -->
        
        <?php
          for($a=0; $a < 2; $a++)
          {
        ?>
        <div class="featured-posts-grid__item featured-posts-grid__item--sm">        
          <article class="entry featured-posts-grid__entry">
            <div class="thumb-bg-holder" style="background-image: url(https://sulutprov.go.id/admin/<?php print $datax[$a]['gambar_brt']; ?>);">
              <a href="https://sulutprov.go.id/berita.php?id=<?php print $datax[$a]['id_brt']; ?>" class="thumb-url"></a>
              <div class="bottom-gradient"></div>
            </div>

            <div class="thumb-text-holder">  
              <h2 class="thumb-entry-title thumb-entry-title--sm">
                <a href="https://sulutprov.go.id/berita.php?id=<?php print $datax[$a]['id_brt']; ?>"><?php print $datax[$a]['judul_brt']; ?></a>
              </h2>
              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <i class="ui-author"></i>
                  <a href="#">sulutprov.go.id</a>
                </li>
                <li class="entry__meta-date">
                  <i class="ui-date"></i>
                  <?php print date("d F, Y", strtotime($datax[$a]['tanggal_brt'])); ?>
                </li>
                <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#"><?php print $datax[$a]['pengunjung_brt']; ?></a>
                </li>               
              </ul>
            </div>
          </article>
        </div>
        <?php } ?>
        

      </div>
    </section> <!-- end featured posts grid -->

    <div class="main-container container mt-40" id="main-container">         

      <!-- Content -->
      <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-30">
          
          <!-- Hot News -->
          <section class="section tab-post mb-10">
            <div class="title-wrap">
              <h3 class="section-title">Berita JDIH</h3>

              <div class="tabs tab-post__tabs"> 
                <ul class="tabs__list">
                  <li class="tabs__item tabs__item--active">
                    <a href="#tab-all" class="tabs__trigger">Semua</a>
                  </li>
                  <?php
                    $sqlv = mysqli_query($con, "SELECT * FROM bagian ORDER BY id_bag ASC");
                    while($datav = mysqli_fetch_array($sqlv)){
                  ?>
                  <li class="tabs__item">
                    <a href="#tab-<?php echo $datav['id_bag']; ?>" class="tabs__trigger"><?php echo $datav['nama_bag']; ?></a>
                  </li>
                  <?php } ?>
                </ul> <!-- end tabs -->
              </div>
            </div>

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">
              
              <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                <div class="row">
                  <?php
                    $sqlv = mysqli_query($con, "SELECT * FROM berita, bagian WHERE id_bag = idp_bb AND status = '1' ORDER BY id_berita DESC LIMIT 0,4");
                    while($datav = mysqli_fetch_array($sqlv)){
                  ?>
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>">
                          <div class="thumb-container thumb-75">
                            <img data-src="<?php echo $datav['gambar']; ?>" src="<?php echo $datav['gambar']; ?>" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category"><?php echo $datav['nama_bag']; ?></a>
                          <h2 class="entry__title">
                            <a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>"><?php echo $datav['judul']; ?></a>
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
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">115</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>
                              <?php
                              $string = strip_tags($datav['isi_berita']);
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
              </div> <!-- end pane 1 -->
              <?php
                  $sql = mysqli_query($con, "SELECT * FROM bagian ORDER BY id_bag ASC");
                  while($data = mysqli_fetch_array($sql)){
              ?>
              <div class="tabs__content-pane" id="tab-<?php echo $data['id_bag']; ?>">
                <div class="row">
                  <?php
                    $sqlv = mysqli_query($con, "SELECT * FROM berita, bagian WHERE id_bag = idp_bb AND status = '1' AND idp_bb = '$data[id_bag]' ORDER BY id_berita DESC LIMIT 0,4");
                    while($datav = mysqli_fetch_array($sqlv)){
                  ?>
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>">
                          <div class="thumb-container thumb-75">
                            <img data-src="<?php echo $datav['gambar']; ?>" src="<?php echo $datav['gambar']; ?>" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category"><?php echo $datav['nama_bag']; ?></a>
                          <h2 class="entry__title">
                            <a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>"><?php echo $datav['judul']; ?></a>
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
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">115</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>
                              <?php
                              $string = strip_tags($datav['isi_berita']);
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
              </div> <!-- end pane 2 -->
            <?php } ?>
              
            </div> <!-- end tab content -->            
          </section> <!-- end hot news -->

          <!-- Latest News -->
          <section class="section">
            <div class="title-wrap">
              <h3 class="section-title">BERITA SULUT</h3>
              <a href="http://sulutprov.go.id/berita_list.php?id=KT0001&sts=BERITA" class="all-posts-url">Lihat Semua</a>
            </div>
            <?php
              for($a=2; $a < 5; $a++)
              {
            ?>
            <article class="entry post-list">
              <div class="entry__img-holder post-list__img-holder">
                <a href="https://sulutprov.go.id/berita.php?id=<?php print $datax[$a]['id_brt']; ?>">
                  <div class="thumb-container thumb-75">
                    <img data-src="https://sulutprov.go.id/admin/<?php print $datax[$a]['gambar_brt']; ?>" src="https://sulutprov.go.id/admin/<?php print $datax[$a]['gambar_brt']; ?>" class="entry__img lazyload" alt="">
                  </div>
                </a>
              </div>

              <div class="entry__body post-list__body">
                <div class="entry__header">
                  <a href="https://sulutprov.go.id/" class="entry__meta-category">sulutprov.go.id</a>
                  <h2 class="entry__title">
                    <a href="https://sulutprov.go.id/berita.php?id=<?php print $datax[$a]['id_brt']; ?>"><?php print $datax[$a]['judul_brt']; ?></a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <i class="ui-author"></i>
                      <a href="#"><?php print $datax[$a]['sumber_brt']; ?></a>
                    </li>
                    <li class="entry__meta-date">
                      <i class="ui-date"></i>
                      <?php print date("d F, Y", strtotime($datax[$a]['tanggal_brt'])); ?>
                    </li>
                    <li class="entry__meta-comments">
                      <i class="ui-eye"></i>
                      <a href="#"><?php print $datax[$a]['pengunjung_brt']; ?></a>
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>
                      <?php
                      $string = strip_tags($datax[$a]['isi_brt']);
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
            <?php } ?>
            
          </section> <!-- end latest news -->

          <!-- Ad Banner 728 -->
          <div class="text-center pb-40">
            <a href="#">
              <img src="img/blog/placeholder_leaderboard.png" alt="">
            </a>
          </div>

          <section class="section mb-20">
            <div class="title-wrap">
              <h3 class="section-title section-title--sm">Artikel</h3>
              <div class="carousel-nav">
                <button class="carousel-nav__btn carousel-nav__btn--prev" aria-label="previous slide">
                  <i class="ui-arrow-left"></i>
                </button>
                <button class="carousel-nav__btn carousel-nav__btn--next" aria-label="next slide">
                  <i class="ui-arrow-right"></i>
                </button>
              </div>
            </div>

            <!-- Slider -->
            <div id="owl-posts" class="owl-carousel owl-theme">
              <?php
                  $sqlv = mysqli_query($con, "SELECT * FROM artikel WHERE status = '1' ORDER BY id_artikel DESC LIMIT 0,10");
                  while($datav = mysqli_fetch_array($sqlv)){
              ?>
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="artikel_detail.php?id=<?php echo $datav['id_artikel']; ?>">
                    <div class="thumb-container thumb-75">
                      <img data-src="<?php echo $datav['gambar']; ?>" src="<?php echo $datav['gambar']; ?>" class="entry__img owl-lazy" alt="" />
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="artikel_detail.php?id=<?php echo $datav['id_artikel']; ?>"><?php echo $datav['judul']; ?></a>
                    </h2>
                    <ul class="entry__meta">
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
                </div>
              </article>
              <?php } ?>
          </section>
          <!-- Editor's Picks -->
          

          <!-- Carousel posts -->
          

        </div> <!-- end posts -->

        <!-- Sidebar -->
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
  <script src="js/jquery.newsTicker.min.js"></script>  
  <script src="js/modernizr.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>