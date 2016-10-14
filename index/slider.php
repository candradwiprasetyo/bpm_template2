<section class="context-dark bg-dark-blue">
          <!-- Swiper-->
          <div data-height="35.5%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
              <?php
              $img = array('bg-02-1920x660.jpg', 'bg-03-1918x761.jpg', 'bg-04-1918x660.jpg');
              $query = "SELECT * FROM slider where active_status = '1' ORDER BY date DESC LIMIT 0,3 ";
              $excute = mysql_query($query);
              $i = 0;
              while ($data = mysql_fetch_array($excute)){
              ?>
              <div data-slide-bg="images/backgrounds/<?= $img[$i]?>" style="background-position: center center" class="swiper-slide">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-lg-7 text-lg-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                          <h1><a href="about-us.html"><?php echo $data['name'] ?></a></h1>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-30">
                          <h4 class="font-default text-light text-spacing-20 veil reveal-sm-block">
                            <?php
                            $a = explode(" ", $data['description']);
                                        for($c=0; $c<=12; $c++){
                                          if(isset( $a[$c])){
                                            echo $a[$c]." ";
                                          }
                                        }echo "... ";
                            ?>
                          </h4>
                          <h4 class="font-default text-light text-spacing-20 veil-sm">Learn more about Transitec</h4>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="200" class="offset-top-20"><a href="about-us.html" class="btn btn-default btn-sm veil reveal-lg-inline-block">View</a><a href="#" data-custom-toggle="quote-form" class="btn btn-primary btn-sm veil-lg">Request a Quote</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $i++;
              }
              ?>
              
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <div id="quote-form" class="quote-form">
              <div class="container">
                <div class="range range-xs-center range-lg-right">
                  <div class="cell-xs-10 cell-sm-8 cell-lg-5 text-left offset-top-0">
                    <div class="inset-lg-left-70">
                      <div class="quote-form-body"><a href="" data-custom-toggle="quote-form" class="close icon icon-xxs fa-close text-white"></a>

                        <div style="text-align: center">
                          <h5>Selamat datang </h5>
                          <h6>di Website Badan Penanaman Modal Provinsi Jawa Timur</h6>
                        </div>
                        <div class="photo"><img src="img/images/welcome.jpg"></div>
                        <div class="offset-top-25">
                          <p>Dengan mengucap puji syukur kehadirat Allah SWT, Web site Badan Pananaman Modal (BPMD) Provinsi Jawa Timur telah dapat ditampilkan. guna  menyajikan informasi kondisi dan potensi Provinsi Jawa Timur, khususnya dalam lebih memacu pembangunan penanaman modal di Jawa Timur.</p>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>