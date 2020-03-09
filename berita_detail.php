<!DOCTYPE html>
<html lang="en">
<head>
  <title>Berita | JDIH Sulut</title>

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

  <?php include "header.php"; 

    
    $idb = $_GET['id'];
    if(strpos($idb, ';') !== false || strpos($idb, '=') !== false || strpos($idb, '#') !== false){
      ?>
      <script type="text/javascript">
        window.location.href = "index.php?sts=Beranda";
      </script>
      <?php 
    }else{
    $idb = (int) $_GET['id'];
    $idb = trim($idb); 
    $idb = mysqli_escape_string($con, $idb);
    $idb = stripslashes($idb); 
    $idb = addslashes($idb);
    $idb = mysqli_real_escape_string($con, $idb); 
    $idb = htmlspecialchars($idb); 
    
    if(is_numeric($idb)){
  
      $sqlb = mysqli_query($con, "SELECT * FROM berita, bagian WHERE id_bag = idp_bb AND status = '1' AND id_berita = '$idb'");
      $datab = mysqli_fetch_assoc($sqlb);
      
      if(isset($_GET['komen'])){
        
        $sqlgbxcx = mysqli_query($con, "SELECT count(id_bk) as tot FROM berita_komentar WHERE isi_bk = '$_GET[isi]' AND email_bk = '$_GET[email]' AND nama_bk = '$_GET[nama]'");
        $datagbxcx = mysqli_fetch_array($sqlgbxcx);
        
        if($datagbxcx['tot']==0){
        $sqlt = "INSERT INTO berita_komentar VALUES(null, '$_GET[id]', '$_GET[nama]', '$_GET[email]', '$_GET[isi]', NOW())";
        mysqli_query($con, $sqlt);
        }
      }
      
      $sqlgbxc = mysqli_query($con, "SELECT count(id_bk) as tot FROM berita_komentar WHERE idp_berita = '$idb'");
      $datagbxc = mysqli_fetch_array($sqlgbxc);
    
    } }
  ?>

    <div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-30">

          <!-- Breadcrumbs -->
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
              <a href="index.php" class="breadcrumbs__url"><i class="ui-home"></i></a>
            </li>
            <li class="breadcrumbs__item">
              <a href="berita.php" class="breadcrumbs__url">Berita</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
              <?php echo $datab['nama_bag']; ?>
            </li>
          </ul>

          <!-- standard post -->
          <article class="entry">
            
            <div class="single-post__entry-header entry__header">
              <a href="#" class="entry__meta-category"><?php echo $datab['nama_bag']; ?></a>
              <h1 class="single-post__entry-title">
                <?php echo $datab['judul']; ?>
              </h1>

              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <i class="ui-author"></i>
                  <a href="#"><?php echo $datab['add_by']; ?></a>
                </li>
                <li class="entry__meta-date">
                  <i class="ui-date"></i>
                  <?php echo date("d F, Y", strtotime($datab['tanggal'])); ?>
                </li>
                <!--<li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">115</a>
                </li>-->
              </ul>
            </div>

            <div class="entry__img-holder">
              <img src="<?php echo $datab['gambar']; ?>" alt="" class="entry__img">
            </div>

            <!-- Share -->
            <div class="entry__share">
              <div class="socials entry__share-socials">
                <a href="#" class="social social-facebook entry__share-social social--wide social--medium">
                  <i class="ui-facebook"></i>
                  <span class="social__text">Share on Facebook</span>
                </a>
                <a href="#" class="social social-twitter entry__share-social social--wide social--medium">
                  <i class="ui-twitter"></i>
                  <span class="social__text">Share on Twitter</span>
                </a>
                <a href="#" class="social social-google-plus entry__share-social social--medium">
                  <i class="ui-google"></i>
                </a>
                <a href="#" class="social social-pinterest entry__share-social social--medium">
                  <i class="ui-pinterest"></i>
                </a>
              </div>                    
            </div> <!-- share -->

            <div class="entry__article">
              <?php echo $datab['isi_berita']; ?>

              <!-- tags -->
              <div class="entry__tags">
                <span class="entry__tags-label">Tags:</span>
                <a href="#" rel="tag"><?php echo $datab['nama_bag']; ?></a>
              </div> <!-- end tags -->

            </div> <!-- end entry article -->

             <!-- Ad Banner 728 -->
          <div class="text-center pb-40">
            <a href="#">
              <img src="img/blog/placeholder_leaderboard.png" alt="">
            </a>
          </div>


            <!-- Prev / Next Post -->
            <nav class="entry-navigation">
              <div class="clearfix">
                <div class="entry-navigation--left">
                  <i class="ui-arrow-left"></i>
                  <span class="entry-navigation__label">Previous Post</span>
                  <div class="entry-navigation__link">
                    <a href="#" rel="next">How to design your first mobile app</a>
                  </div>
                </div>
                <div class="entry-navigation--right">
                  <span class="entry-navigation__label">Next Post</span>
                  <i class="ui-arrow-right"></i>
                  <div class="entry-navigation__link">
                    <a href="#" rel="prev">Video Youtube format post. Made with WordPress</a>
                  </div>
                </div>
              </div>
            </nav>

            <!-- Related Posts -->
            <div class="related-posts">
              <div class="title-wrap mt-40">
                <h5 class="uppercase">Berita Terkait</h5>
              </div>
              <div class="row row-20">
              <?php
                  $sqlv = mysqli_query($con, "SELECT * FROM berita, bagian WHERE id_bag = idp_bb AND status = '1' AND idp_bb = '$datab[idp_bb]' ORDER BY id_berita DESC LIMIT 0,3");
                  while($datav = mysqli_fetch_array($sqlv)){
              ?>
              
                <div class="col-md-4">
                  <article class="entry">
                    <div class="entry__img-holder">
                      <a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>">
                        <div class="thumb-container thumb-75">
                          <img data-src="<?php echo $datav['gambar']; ?>" src="<?php echo $datav['gambar']; ?>" class="entry__img lazyload" alt="">
                        </div>
                      </a>
                    </div>

                    <div class="entry__body">
                      <div class="entry__header">
                        <h2 class="entry__title entry__title--sm">
                          <a href="berita_detail.php?id=<?php echo $datav['id_berita']; ?>"><?php echo $datav['judul']; ?></a>
                        </h2>
                      </div>
                    </div>
                  </article>
                </div>
              
              <?php } ?>
              </div>
            </div> <!-- end related posts -->                

          </article> <!-- end standard post -->


          <!-- Comments -->
          <div class="entry-comments mt-30">
            <div class="title-wrap mt-40">
              <h5 class="uppercase"><?php echo $datagbxc['tot']; ?> Komentar</h5>
            </div>
            <ul class="comment-list">
              <?php
                  $sqlgbxc = mysqli_query($con, "SELECT * FROM berita_komentar WHERE idp_berita = '$datab[id_berita]' ORDER BY id_bk ASC");
                  while($datagbxc = mysqli_fetch_array($sqlgbxc)){
              ?>
              <li class="comment">  
                <div class="comment-body">
                  <div class="comment-avatar">
                    <img alt="" src="images/user.png" width="80px">
                  </div>
                  <div class="comment-text">
                    <h6 class="comment-author"><?php echo $datagbxc['nama_bk']; ?></h6>
                    <div class="comment-metadata">
                      <a href="#" class="comment-date"><?php echo date("M d, Y at H:i:s", strtotime($datagbxc['tanggal_bk'])); ?></a>
                    </div>                      
                    <p><?php echo $datagbxc['isi_bk']; ?></p>
                  </div>
                </div>
              </li> <!-- end 1-2 comment -->
              <?php } ?>
            </ul>         
          </div> <!-- end comments -->


          <!-- Comment Form -->
          <div id="respond" class="comment-respond">
            <div class="title-wrap">
              <h5 class="comment-respond__title uppercase">Tinggalkan Komentar</h5>
            </div>
            <form id="form" class="comment-form" method="get" action="berita_detail.php">
              <input name="id" id="id" type="hidden" value="<?php echo $_GET['id']; ?>" required>
              <p class="comment-form-comment">
                <!-- <label for="comment">Comment</label> -->
                <textarea id="comment" name="isi" rows="5" required="required" placeholder="Tulis komentar anda...*"></textarea>
              </p>

              <div class="row row-20">
                <div class="col-lg-4">
                  <input name="nama" id="name" type="text" placeholder="Nama*" required>
                </div>
                <div class="col-lg-4">
                  <input name="email" id="email" type="email" placeholder="Email*" required>
                </div>
                <div class="col-lg-4">
                  <input name="tel" id="website" type="text" placeholder="Telepon">
                </div>
              </div>

              <p class="comment-form-submit">
                <input type="submit" class="btn btn-lg btn-color btn-button" value="Kirim" name="komen">
              </p>
              
            </form>
          </div> <!-- end comment form -->

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