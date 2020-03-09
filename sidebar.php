<aside class="col-lg-4 sidebar sidebar--right">

          <div class="widget">
            <h4 class="widget-title">Gubernur & Wakil Gubernur</h4>
            <div id="owl-single" class="owl-carousel owl-theme">

              <article class="entry">
                <div class="entry__img-holder mb-0">
                  <a href="images/flora.jpg">
                    <div class="thumb-bg-holder">
                      <img data-src="images/gub.png" src="images/gub.png" class="entry__img owl-lazy" alt="">
                      <div class="bottom-gradient"></div>
                    </div>
                  </a>
                </div>

                <div class="thumb-text-holder">  
                  <h2 class="thumb-entry-title thumb-entry-title--sm">
                    <a href="images/gub.png">Olly Dondokambey, SE.<br>Gubernur Provinsi Sulawesi Utara</a>
                  </h2>
                </div>
              </article>
              
              <article class="entry">
                <div class="entry__img-holder mb-0">
                  <a href="single-post.html">
                    <div class="thumb-bg-holder">
                      <img data-src="images/wagub.png" src="images/wagub.png" class="entry__img owl-lazy" alt="">
                      <div class="bottom-gradient"></div>
                    </div>
                  </a>
                </div>

                <div class="thumb-text-holder">  
                  <h2 class="thumb-entry-title thumb-entry-title--sm">
                    <a href="images/wagub.png">Drs. Steven O.E. Kandouw<br>Wakil Gubernur Provinsi Sulawesi Utara</a>
                  </h2>
                </div>
              </article>
            
            </div>
          </div>

          <!--
          <div class="widget widget_media_image">
            <a href="#">
              <img src="images/flora.jpg" alt="">
            </a>
            <center>Dr. FLORA KRISEN, SH, MH<br>Kepala Biro Hukum Pemprov Sulut</center>
          </div>-->   
          
          <!-- Widget Social Subscribers -->
          <div class="widget widget-social-subscribers">
            <ul class="widget-social-subscribers__list">
              <li class="widget-social-subscribers__item">
                <a href="http://jdihn.bphn.go.id/?page=peraturan&section=produk_bphn&act=year&id=2008032915423012&year=2016?kat=0" class="widget-social-subscribers__url widget-social-subscribers--facebook">
                  <i class="ui-search widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">Undang-Undang</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="http://jdihn.bphn.go.id/?page=peraturan&section=produk_bphn&act=year&id=2008032915432890&year=2016?kat=0" class="widget-social-subscribers__url widget-social-subscribers--twitter">
                  <i class="ui-search widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">Peraturan Pemerintah</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="http://jdihn.bphn.go.id/?page=peraturan&section=produk_bphn&act=year&id=2009121805000003&year=2016?kat=0" class="widget-social-subscribers__url widget-social-subscribers--google">
                  <i class="ui-search widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">Peraturan Presiden</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="http://jdihn.bphn.go.id/?page=peraturan&section=produk_hukum&act=jdih?kat=0" class="widget-social-subscribers__url widget-social-subscribers--rss">
                  <i class="ui-search widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">Peraturan Kementerian</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="produk_hukum.php?kat=3" class="widget-social-subscribers__url widget-social-subscribers--youtube">
                  <i class="ui-search widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">Peraturan Daerah Prov</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="produk_hukum.php?kat=4" class="widget-social-subscribers__url widget-social-subscribers--instagram">
                  <i class="ui-search widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">Peraturan Gubernur</span>
                </a>
              </li>
            </ul>
          </div>  

          <!-- Widget Newsletter -->
          <div class="widget widget_mc4wp_form_widget">
            <h4 class="widget-title">Pencarian Produk Hukum</h4>
            <form class="mc4wp-form" method="get" action="produkhukum_cari.php">
              <div class="mc4wp-form-fields">
                <p>
                  <input type="text" name="cari" placeholder="Kata Kunci" required>
                </p>
                <p>
                  <input type="submit" class="btn btn-lg btn-color" value="Cari">
                </p>
              </div>
            </form>
          </div> <!-- end widget newsletter -->
          
          <!-- Widget Popular/Latest Posts -->
          <div class="widget widget-tabpost">
            <div class="tabs widget-tabpost__tabs">
              <ul class="tabs__list widget-tabpost__tabs-list">
                <li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
                  <a href="#tab-perda" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Perda Provinsi</a>
                </li>                                 
                <li class="tabs__item widget-tabpost__tabs-item">
                  <a href="#tab-pergub" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Pergub</a>
                </li>                                
              </ul> <!-- end tabs -->
              
              <!-- tab content -->
              <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">
                
                <div class="tabs__content-pane tabs__content-pane--active" id="tab-perda">
                  <ul class="post-list-small">
                    <?php
                      $sqlv = mysqli_query($con, "SELECT * FROM peraturan, katalog WHERE id_kat = id_peraturan_cat AND id_kat = '3' ORDER BY id_peraturan DESC LIMIT 0,10");
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
                              Nomor Peraturan : <?php echo $datav['nomor']; ?> &nbsp; - &nbsp;
                              Tahun : <?php echo $datav['tahun']; ?>
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
                
                <div class="tabs__content-pane" id="tab-pergub">
                  <ul class="post-list-small">
                    <?php
                      $sqlv = mysqli_query($con, "SELECT * FROM peraturan, katalog WHERE id_kat = id_peraturan_cat AND id_kat = '4' ORDER BY id_peraturan DESC LIMIT 0,10");
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
                              Nomor Peraturan : <?php echo $datav['nomor']; ?> &nbsp; - &nbsp;
                              Tahun : <?php echo $datav['tahun']; ?>
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
                
              </div> <!-- end tab content -->
            </div> <!-- end tabs -->            
          </div> <!-- end widget popular/latest posts -->

          <!-- Widget Ad 125 -->
          <div class="widget widget-gallery-sm">
            <h4 class="widget-title">Link Terkait</h4>
            <ul class="widget-gallery-sm__list">
              <?php
                $sqlv = mysqli_query($con, "SELECT * FROM link_terkait ORDER BY id_lt ASC");
                while($datav = mysqli_fetch_array($sqlv)){
              ?>
              <li class="widget-gallery-sm__item">
                <a href="<?php echo $datav['url_lt']; ?>"><img src="<?php echo $datav['gambar_lt']; ?>" alt="<?php echo $datav['nama_lt']; ?>" style="width:125px; height:125px;" width="125px" height="125px"></a>
              </li>
              <?php } ?>
            </ul>
          </div> <!-- end widget ad 300 -->    

          <!--
          <div class="widget widget-socials">
            <h4 class="widget-title">Ikuti Kami</h4>
            <div class="socials">
              <a class="social social-facebook social--large" href="#" title="facebook" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
              </a><a class="social social-twitter social--large" href="#" title="twitter" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
              </a><a class="social social-google-plus social--large" href="#" title="google" target="_blank" aria-label="google">
                <i class="ui-google"></i>
              </a><a class="social social-instagram social--large" href="#" title="instagram" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
              </a><a class="social social-youtube social--large" href="#" title="youtube" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
              </a><a class="social social-rss social--large" href="#" title="rss" target="_blank" aria-label="rss">
                <i class="ui-rss"></i>
              </a>
            </div>
          </div> -->

          <!--
          <div class="widget">
            <h4 class="widget-title">Our tweets</h4>
            <div class="tweets-container">
              <div id="tweets"></div>                  
            </div>
          </div>
          -->


          <!-- Widget Carousel -->
          

          

        </aside> <!-- end sidebar -->