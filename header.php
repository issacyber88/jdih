<?php 
  include "koneksi.php"; 

  $sumber = 'http://sulutprov.go.id/api/berita.php';
  $konten = file_get_contents($sumber);
  $datax = json_decode($konten, true);

  $sql1 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'nama'");
  $datanama = mysqli_fetch_array($sql1);
  
  $sql2 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'alamat'");
  $dataalamat = mysqli_fetch_array($sql2);
  
  $sql3 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'telepon'");
  $datatelp = mysqli_fetch_array($sql3);
  
  $sql4 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'email'");
  $dataemail = mysqli_fetch_array($sql4);
  
  $sql5 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'running text'");
  $datarunningtext = mysqli_fetch_array($sql5);
  
  $sql6 = mysqli_query($con, "SELECT * FROM informasi WHERE nama_inf = 'tentang kami'");
  $datatentangkami = mysqli_fetch_array($sql6);
?>
   
  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>
  <!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <!-- Categories -->
        <li>
          <a href="http://jdihn.bphn.go.id/?page=peraturan&section=produk_bphn&act=year&id=2008032915423012&year=2016?kat=0" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">Undang-Undang</a>
        </li>
        <li>
          <a href="http://jdihn.bphn.go.id/?page=peraturan&section=produk_bphn&act=year&id=2008032915432890&year=2016?kat=0" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--blue">Peraturan Pemerintah</a>
        </li>
        <li>
          <a href="http://jdihn.bphn.go.id/?page=peraturan&section=produk_bphn&act=year&id=2009121805000003&year=2016?kat=0" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--red">Peraturan Presiden</a>
        </li>
        <li>
          <a href="http://jdihn.bphn.go.id/?page=peraturan&section=produk_hukum&act=jdih?kat=0" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--salad">Peraturan Kementerian</a>
        </li>
        <li>
          <a href="produk_hukum.php?kat=3" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--purple">Peraturan Daerah Provinsi</a>
        </li>
        <li>
          <a href="produk_hukum.php?kat=4" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--yellow">Peraturan Gubernur</a>
        </li>
        <li>
          <a href="putusan.php" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--light-blue">Putusan Badan Peradilan</a>
        </li>
        <li>
          <a href="mou.php" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--violet">Nota Kesepahaman (MoU)</a>
        </li>
		<li>
          <a href="instruksi.php" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">Instruksi Gubernur</a>
        </li>
		<li>
          <a href="raperda.php?id=Kabupaten/Kota" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--blue">Ranperda Kabupaten/Kota</a>
        </li>
		<li>
          <a href="raperda.php?id=Provinsi" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--red">Ranperda Provinsi</a>
        </li>

        <li>
          <a href="berita.php" class="sidenav__menu-link">Berita Hukum</a>
        </li>

        <li>
          <a href="artikel.php" class="sidenav__menu-link">Artikel Hukum</a>
        </li>

        <li>
          <a href="kontak.php" class="sidenav__menu-link">Kontak</a>
        </li>
      </ul>
    </nav>

    <div class="socials sidenav__socials"> 
      <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
        <i class="ui-google"></i>
      </a>
      <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
      <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
    </div>
  </header> <!-- end sidenav -->

  <main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">
          <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> <!-- end Side menu button -->

            <!-- Mobile logo -->
            <a href="index.html" class="logo logo--mobile d-lg-none">
              <img class="logo__img" src="img/logo_mobile.png" srcset="img/logo_mobile.png 1x, img/logo_mobile@2x.png 2x" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="active">
                  <a href="index.php">Beranda</a>
                </li>

                
                <li class="nav__dropdown">
                  <a href="#">Profil</a>
                  <ul class="nav__dropdown-menu">
                    <?php
                        $sqlgb = mysqli_query($con, "SELECT * FROM content WHERE menu = 'profil' ORDER BY id_content ASC");
                        while($datagb = mysqli_fetch_array($sqlgb)){      
                    ?>
                    <li><a href="konten.php?id=<?php echo $datagb['id_content']; ?>"><?php echo $datagb['nama_content']; ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
                
                <li class="nav__dropdown">
                  <a href="#">Katalog</a>
                  <ul class="nav__dropdown-menu">
                    <?php
                        $sqlgb = mysqli_query($con, "SELECT * FROM katalog ORDER BY id_kat ASC");
                        while($datagb = mysqli_fetch_array($sqlgb)){       
                    ?>
                    <li><a href="katalog.php?kat=<?php echo $datagb['kategori_kat']; ?>"><?php echo $datagb['kategori_kat']; ?></a></li>
                    <?php } ?>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="#">Produk Hukum</a>
                  <ul class="nav__dropdown-menu">
                    <?php
                        $sqlgb = mysqli_query($con, "SELECT * FROM peraturan_cat WHERE menu_link <> '' AND menu_link <> 'produkhukum.php' ORDER BY id_peraturan_cat ASC");
                        while($datagb = mysqli_fetch_array($sqlgb)){      
                    ?>
                    <li><a href="<?php echo $datagb['menu_link']; ?>?kat=<?php echo $datagb['key_cat']; ?>"><?php echo $datagb['bentuk']; ?></a></li>
                    <?php }

                    $sqlgb = mysqli_query($con, "SELECT * FROM peraturan_cat, katalog WHERE bentuk = kategori_kat AND menu_link <> '' ORDER BY id_peraturan_cat ASC");
                    while($datagb = mysqli_fetch_array($sqlgb)){  
                  ?>
                    <li><a href="<?php echo $datagb['menu_link']; ?>?kat=<?php echo $datagb['key_cat']; ?>"><?php echo $datagb['bentuk']; ?></a></li>
                  <?php } ?>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="#">Informasi Umum</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="berita.php">Berita Hukum</a></li>
                    <li><a href="artikel.php">Artikel Hukum</a></li>
                    <li><a href="putusan.php">Putusan Badan Peradilan</a></li>
                    <li><a href="mou.php">Nota Kesepahaman (MoU)</a></li>
                    <li><a href="instruksi.php">Instruksi Gubernur</a></li>
                    <li><a href="suratedaran.php">Surat Edaran</a></li>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="#">Ranperda</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="raperda.php?id=Kabupaten/Kota">RANPERDA Kabupaten/Kota</a></li>
                    <li><a href="raperda.php?id=Provinsi">RANPERDA Provinsi</a></li>
                  </ul>
                </li>

                <li>
                  <a href="kontak.php">Kontak</a>
                </li>


              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right nav--align-right d-lg-flex">

              <!-- Socials -->
              <div class="nav__right-item socials nav__socials d-none d-lg-flex"> 
                <a class="social social-facebook social--nobase" href="#" target="_blank" aria-label="facebook">
                  <i class="ui-facebook"></i>
                </a>
                <a class="social social-twitter social--nobase" href="#" target="_blank" aria-label="twitter">
                  <i class="ui-twitter"></i>
                </a>
                <a class="social social-google social--nobase" href="#" target="_blank" aria-label="google">
                  <i class="ui-google"></i>
                </a>
                <a class="social social-youtube social--nobase" href="#" target="_blank" aria-label="youtube">
                  <i class="ui-youtube"></i>
                </a>
                <a class="social social-instagram social--nobase" href="#" target="_blank" aria-label="instagram">
                  <i class="ui-instagram"></i>
                </a>
              </div>

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form" method="GET" action="produkhukum_cari.php">
                    <input type="text" placeholder="Tulis kata kunci..." class="nav__search-input" name="cari">
                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>
                
              </div>

            </div> <!-- end nav right -->  
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->
  
    <!-- Header -->
    <div class="header">
      <div class="container">
        <div class="flex-parent align-items-center">
          
          <!-- Logo -->
          <a href="index.html" class="logo d-none d-lg-block">
            <img class="logo__img" src="img/logo.png" srcset="img/logo.png 1x, img/logo@2x.png 2x" alt="logo" style="height:80px;">
          </a>

          <!-- Ad Banner 728 -->
          <div class="text-center">
            <a href="#">
              <img src="img/blog/placeholder_leaderboard.png" alt="" style="height: 90px;">
            </a>
          </div>

        </div>
      </div>
    </div> <!-- end header -->