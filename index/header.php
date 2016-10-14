<header class="page-head header-panel-absolute">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-static" data-md-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-offset="95" class="rd-navbar rd-navbar-default" data-lg-auto-height="true" data-auto-height="false" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <div class="rd-navbar-panel-title veil-md reveal-inline-block">
                  <h4>Home</h4>
                </div>
                <!-- RD Navbar Right Side Toggle-->
                <button data-rd-navbar-toggle=".right-side" class="rd-navbar-right-side-toggle veil-md"><span></span></button>
                <div class="shell">
                  <div class="range range-md-middle range-lg-top">
                    <div class="cell-md-3 left-side">
                      <div class="clearfix text-lg-left text-center">
                        <!--Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="index.html"><img width='165' height='76' src='images/logo.png' alt='' style="visibility: hidden;" /></a></div>
                      </div>
                    </div>
                    <div class="cell-md-9 text-md-right right-side">
                      <ul class="offset-lg-top-15 list-unstyled">
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-envelope-o text-middle icon-primary"></span><a href="mailto:#" class="inset-left-10 text-middle">invest@bpm.jatimprov.go.id</a></li>
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-clock-o text-middle icon-primary"></span><span class="inset-left-10 text-middle">Senin - Jumat : 9:00–17:00</span></li>
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-phone text-middle icon-primary"></span><a href="callto:#" class="inset-left-10 text-middle">031-3537537</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='165' height='76' src='images/logo.png' alt=''/></a><a data-custom-toggle="rd-navbar-search-mobile" href="#" class="rd-navbar-mobile-search-toggle mdi"><span></span></a></div>
                      <!--RD Navbar Mobile Search-->
                      <div id="rd-navbar-search-mobile" class="rd-navbar-search-mobile">
                        <form action="search-results.html" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                          <div class="form-group">
                            <label for="rd-navbar-mobile-search-form-input" class="form-label">Search</label>
                            <input id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      
                      <?php
                      $i = 1;
                      $q_menu = mysql_query("select * from menus where level = '1' and id_menu < 40 order by index_id");
                      $jml = mysql_num_rows($q_menu);
                      while($r_menu = mysql_fetch_array($q_menu)){
                        
                        if($r_menu['id_menu'] == 1){
                          $link = $r_menu['link'];
                        }else if($r_menu['id_menu'] == 59){
                          $link = "../ppid/";
                        }else if($r_menu['id_menu'] == 60){
                          $link = "http://ejisc.bpm.jatimprov.go.id/app_ejisc/web/";
                        }else{
                          $link = "index.php?page=content_utama&id_menu=".$r_menu['id_menu']."";
                        }
                        
                      ?>
                      <li><a href="<?php echo $link?>"><?= $r_menu['name']?></a>
                        <?php
      
                            $q_menu2 = mysql_query("select * from menus where level = '2' and id_parent ='".$r_menu['id_menu']."' and id_menu <> 5 and id_menu <> 12 and id_menu <> 29 and id_menu <> 4 order by id_menu");
                            $jml2 = mysql_num_rows($q_menu2);
                            if($jml2 > 0){ 
                        ?>
                        <ul class="rd-navbar-dropdown">
                          <?php
                          $i2 = 1;
                                  while($r_menu2 = mysql_fetch_array($q_menu2)){
                            
                            if($r_menu2['id_menu'] == 15 || $r_menu2['id_menu'] == 44 || $r_menu2['id_menu'] == 45 
                            || $r_menu2['id_menu'] == 46 || $r_menu2['id_menu'] == 43 || $r_menu2['id_menu'] == 53
                            || $r_menu2['id_menu'] == 31 || $r_menu2['id_menu'] == 32 || $r_menu2['id_menu'] == 33
                            || $r_menu2['id_menu'] == 68
                            ){
                              $link2 = $r_menu2['link'];
                            }else if($r_menu2['id_menu'] == 40 || $r_menu2['id_menu'] == 41){
                              $link2 = "index.php?page=content_utama&id_menu=".$r_menu2['id_menu'];
                            //}else if($r_menu2['id_menu'] == 35 || $r_menu2['id_menu'] == 36 || $r_menu2['id_menu'] == 37 || $r_menu2['id_menu'] == 38 || $r_menu2['id_menu'] == 39){
                              // $link2 = "index.php?page=investment_guide&ig_type=".$r_menu2['id_menu'];
                            }else if($r_menu2['id_parent']==59 && $r_menu2['id_menu']!=68){
                              $link2 = "index.php?page=content_utama&id_menu=".$r_menu2['id_menu'];
                            }else{
                              $link2 = "index.php?page=content&id_menu=".$r_menu2['id_menu']."";
                            }
                            
                              ?>
                          <li><a href="<?php echo $link2?>"><?= $r_menu2['name']?></a>
                            <?php
                            $q_menu3 = mysql_query("select * from menus where level = '3' and id_parent ='".$r_menu2['id_menu']."' order by id_menu");
                            $jml3 = mysql_num_rows($q_menu3);
                            if($jml3 > 0){ 
                            ?>
                            <ul class="rd-navbar-dropdown">
                            <?php
                              while($r_menu3 = mysql_fetch_array($q_menu3)){
                            ?>
                              <li><a href="index.php?page=content&id_menu=<?php echo $r_menu3['id_menu']?>"><?= $r_menu3['name']?></li>
                              <?php
                              }
                              ?>
                            </ul>
                            <?php
                            }
                            ?>
                          </li>
                          <?php
                          }
                          ?>
                          
                        </ul>
                        <?php
                        }
                        ?>
                      </li> 
                      <?php
                      }
                      ?>
                    
                    </ul>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="search-results.html" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-search-form-input" class="form-label">Search</label>
                      <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                      <div id="rd-search-results-live" class="rd-search-results-live"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>