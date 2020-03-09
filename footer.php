<!-- Footer -->
    <footer class="footer footer--dark">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="widget">
                <a href="index.html">
                  <img src="img/logo_mobile.png" srcset="img/logo_mobile.png 1x, img/logo_mobile@2x.png 2x" class="logo__img" alt="">
                </a><br><br>
                <ul>
                  <li><a href="#"><i class="fa fa-envelope"></i><?php echo $dataemail['isi_inf']; ?></a></li>
                  <li><a href="#"><i class="fa fa-phone"></i><?php echo $datatelp['isi_inf']; ?></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span><?php echo $dataalamat['isi_inf']; ?></span></a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <h4 class="widget-title">Produk Hukum Terbaru</h4>
              <ul class="post-list-small">
                <?php 
                    $sqlv = mysqli_query($con, "SELECT * FROM peraturan, katalog WHERE id_kat = id_peraturan_cat ORDER BY id_peraturan DESC LIMIT 0,2");
                    while($datav = mysqli_fetch_array($sqlv)){
                ?>
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                        <a href="<?php echo $datav['file']; ?>"><?php echo $datav['tentang_katalog']; ?></a>
                      </h3>
                      <ul class="entry__meta">
                        <li class="entry__meta-date">
                            Nomor Peraturan : <?php echo $datav['nomor']; ?> |
                            Tahun : <?php echo $datav['tahun']; ?>
                        </li>
                      </ul>
                    </div>                  
                  </article>
                </li>
                <?php } ?>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="widget widget__newsletter">
                <h4 class="widget-title">Ikuti Kami</h4>

                <div class="socials mb-20">
                  <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                  <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                  <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                  <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                  <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                </div>

              </div>
            </div>            

            <div class="col-lg-3 col-md-6">
              <div class="widget widget_nav_menu">
                <h4 class="widget-title">Tautan Terkait</h4>
                <ul>
                  <?php
                    $sqlgb = mysqli_query($con, "SELECT * FROM link ORDER BY id_link ASC");
                    while($datagb = mysqli_fetch_array($sqlgb)){
                  ?>
                  <li><a href="https://<?php echo $datagb['url_link']; ?>"><?php echo $datagb['nama_link']; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>            

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="footer__bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 order-lg-2 text-right text-md-center">
              <div class="widget widget_nav_menu">
                <ul>
                  <li><a href="berita.php">Berita</a></li>
                  <li><a href="artikel.php">Artikel</a></li>
                  <li><a href="kontak.php">Hubungi Kami</a></li>
                </ul>
              </div>              
            </div>
            <div class="col-lg-5 order-lg-1 text-md-center">
              <span class="copyright">
                &copy; 2020 JDIH | by <a href="https://jdih.sulutprov.go.id">Biro Hukum Setda Pemprov Sulut</a>
              </span>
            </div>            
          </div>
          
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->