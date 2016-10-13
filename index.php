<?php
include 'libraries/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo"> 
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Hind:400,300,700%7CMontserrat:400,700"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/svg-icons.css" type="text/css" media="all">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
   <!--  <div style="width: 100%; height: 5px; background: #333;"></div> -->
    <div class="page text-center">
      <!-- Page Header-->
      <?php
      include 'index/header.php';
      ?>
      <!-- Page Content-->
      <main class="page-content">
        <section class="context-dark bg-dark-blue">
          <!-- Swiper-->
          <div data-height="35.5%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
              <div data-slide-bg="images/backgrounds/bg-02-1920x660.jpg" style="background-position: center center" class="swiper-slide">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-lg-7 text-lg-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                          <h1><a href="about-us.html">Delivery unlimited.</a></h1>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-30">
                          <h4 class="font-default text-light text-spacing-20 veil reveal-sm-block">We help people save time, make their life better, exercising communications, both in business and in private life.</h4>
                          <h4 class="font-default text-light text-spacing-20 veil-sm">Learn more about Transitec</h4>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="200" class="offset-top-20"><a href="about-us.html" class="btn btn-default btn-sm veil reveal-lg-inline-block">learn more</a><a href="#" data-custom-toggle="quote-form" class="btn btn-primary btn-sm veil-lg">Request a Quote</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div data-slide-bg="images/backgrounds/bg-03-1918x761.jpg" style="background-position: center center" class="swiper-slide">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-lg-7 text-lg-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                          <h1><a href="about-us.html">A partnership based on trust.</a></h1>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-30">
                          <h4 class="font-default text-light text-spacing-20 veil reveal-sm-block">We strive to ensure that our services have become a benchmark of quality in the field of the delivery.</h4>
                          <h4 class="font-default text-light text-spacing-20 veil-sm">Learn more about Transitec</h4>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="200" class="offset-top-20"><a href="about-us.html" class="btn btn-default btn-sm veil reveal-lg-inline-block">learn more</a><a href="#" data-custom-toggle="quote-form" class="btn btn-primary btn-sm veil-lg">Request a Quote</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div data-slide-bg="images/backgrounds/bg-04-1918x660.jpg" style="background-position: center center" class="swiper-slide">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-lg-7 text-lg-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="200">
                          <h1><a href="about-us.html">Comfortable Payment System.</a></h1>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="300" class="offset-top-30">
                          <h4 class="font-default text-light text-spacing-20 veil reveal-sm-block">Payment for services is made by credit or advanced system. A form of payment is in the discretion of the customer.</h4>
                          <h4 class="font-default text-light text-spacing-20 veil-sm">Learn more about Transitec</h4>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="500" class="offset-top-20"><a href="about-us.html" class="btn btn-default btn-sm veil reveal-lg-inline-block"> learn more</a><a href="#" data-custom-toggle="quote-form" class="btn btn-primary btn-sm veil-lg">Request a Quote</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <div id="quote-form" class="quote-form">
              <div class="container">
                <div class="range range-xs-center range-lg-right">
                  <div class="cell-xs-10 cell-sm-8 cell-lg-5 text-left offset-top-0">
                    <div class="inset-lg-left-70">
                      <div class="quote-form-body"><a href="" data-custom-toggle="quote-form" class="close icon icon-xxs fa-close text-white"></a>
                        <div>
                          <h3>Request a Quote</h3>
                        </div>
                        <div class="offset-top-25">
                          <p>Get in touch with us if you have any queries and we will get back to you as soon as possible.</p>
                        </div>
                        <div class="offset-top-20">
                          <div class="form-group">
                            <select data-placeholder="Select an option" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                              <option>City-poster</option>
                              <option value="2">San Francisco</option>
                              <option value="3">New York</option>
                              <option value="4">Las Vegas</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <select data-placeholder="Select an option" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                              <option>City-recipient</option>
                              <option value="2">San Francisco</option>
                              <option value="3">New York</option>
                              <option value="4">Las Vegas</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <select data-placeholder="Select an option" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                              <option>Type of departure</option>
                              <option value="1">By road</option>
                              <option value="2">By water</option>
                              <option value="3">By train</option>
                            </select>
                          </div><a href="calculate.html" class="btn btn-sm btn-primary">Get started</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Classic Thumbnail-->
        <section class="section-80 section-lg-top-90 section-lg-bottom-120">
          <div class="shell text-sm-left">
            <h2>our services</h2>
            <hr class="divider divider-lg bg-primary hr-sm-left-0">
            <div class="range range-xs-center range-sm-left offset-top-50">
              <div class="cell-xs-10 cell-sm-8">
                <p>Welcome to our transportation world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for.</p>
              </div>
            </div>
            <div class="range text-left range-xs-center offset-top-50">
              <div class="cell-xs-8 cell-sm-6 cell-md-4"><a class="thumbnail-classic" href="services.html" target="_self">
                          <figure><img width="370" height="250" src="images/services/service-01-370x250.jpg" alt="">
                            <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                              <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Transportation</h6>
                            </figcaption>
                          </figure></a>
              </div>
              <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0"><a class="thumbnail-classic" href="services.html#undefined2" target="_self">
                          <figure><img width="370" height="250" src="images/services/service-02-370x250.jpg" alt="">
                            <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                              <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Logistics</h6>
                            </figcaption>
                          </figure></a>
              </div>
              <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0"><a class="thumbnail-classic" href="services.html#undefined3" target="_self">
                          <figure><img width="370" height="250" src="images/services/service-03-370x250.jpg" alt="">
                            <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                              <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Towing Service</h6>
                            </figcaption>
                          </figure></a>
              </div>
              <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30"><a class="thumbnail-classic" href="services.html#undefined4" target="_self">
                          <figure><img width="370" height="250" src="images/services/service-04-370x250.jpg" alt="">
                            <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                              <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Maintenance Leasing</h6>
                            </figcaption>
                          </figure></a>
              </div>
              <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30"><a class="thumbnail-classic" href="services.html#undefined5" target="_self">
                          <figure><img width="370" height="250" src="images/services/service-05-370x250.jpg" alt="">
                            <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                              <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Distribution Services</h6>
                            </figcaption>
                          </figure></a>
              </div>
              <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30"><a class="thumbnail-classic" href="services.html#undefined6" target="_self">
                          <figure><img width="370" height="250" src="images/services/service-06-370x250.jpg" alt="">
                            <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                              <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Storage</h6>
                            </figcaption>
                          </figure></a>
              </div>
            </div>
            <div class="offset-top-50"><a href="services-1.html" class="btn btn-default btn-sm">view all services</a></div>
          </div>
        </section>
        <!-- Why choose us-->
        <section class="section-80 section-md-top-65 section-md-bottom-120 bg-dark-blue context-dark section-skew section-skew-wide">
          <div class="skew-block"></div>
          <div class="shell text-md-left">
            <h2>WHY CHOOSE US</h2>
            <hr class="divider divider-lg bg-primary hr-md-left-0">
            <div class="range text-md-left offset-top-50 range-xs-center">
              <div class="cell-sm-8 cell-md-4">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span class="icon icon-lg icon-circle icon-primary-filled fa-thumbs-up"></span></div>
                  <div class="unit-body">
                    <h4 class="text-bold">Best Service</h4>
                    <p>Our mission is to attract and retain customers by providing Best in Class transportation solutions and fostering a profitable, disciplined culture of safety, service, and trust.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span class="icon icon-lg icon-circle icon-primary-filled fa-users"></span></div>
                  <div class="unit-body">
                    <h4 class="text-bold">Reputation</h4>
                    <p>We have established a strong presence in the transportation industry. Our award-winning services earn a reputation for quality and excellence that few can rival.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span class="icon icon-lg icon-circle icon-primary-filled mdi fa-lock"></span></div>
                  <div class="unit-body">
                    <h4 class="text-bold">Safety &amp; Security</h4>
                    <p>Safety for our employees, customers and motoring public will always remain our primary focus in all the policies, procedures and programs that govern our business.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Our Mission-->
        <section class="bg-lightest section-skew">
          <div class="skew-block"></div>
          <div class="shell text-sm-left">
            <div class="range range-xs-center range-lg-right offset-top-0">
              <div class="cell-xs-10 cell-sm-12 cell-lg-8 section-image-aside section-image-aside-left">
                <div style="background-image: url(images/home-01-746-561.jpg)" class="section-image-aside-img veil reveal-lg-block"></div>
                <div class="section-image-aside-body section-80 offset-lg-top-0 section-lg-90 inset-lg-left-100">
                  <h2>Our Mission:</h2>
                  <hr class="divider divider-lg bg-primary hr-sm-left-0">
                  <div class="offset-top-20 offset-lg-top-50">
                    <p>Transitec Transportation Company is committed to providing efficient and reliable services across all its business segments to its valued customers where safety is our top priority. Transitec will commit its resources to safe and environmentally sound operating practices.</p>
                    <p>That will result in providing our employees with a safe work environment and our customers with the assurance of safe, dependable service. We aim to be recognized among current and prospective shipper clients as a premier provider of logistics and transportation services, to be the leader in the transportation management industry.</p>
                  </div>
                  <div class="offset-top-20"><a href="about-us.html" class="btn btn-primary btn-sm">learn more</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Classic Thumbnail-->
        <!-- Latest news-->
        <section class="section-80 section-md-bottom-120">
          <div class="shell text-md-left">
            <h2>latest news</h2>
            <hr class="divider divider-lg bg-primary hr-md-left-0">
            <div class="range text-md-left offset-top-50 range-xs-center">
              <div class="cell-sm-8 cell-md-4">
                <article class="post-news"><a class="thumbnail-default" href="blog-post-page.html" target="_self">
                            <figure><img width="370" height="270" src="images/news-01-370x270.jpg" alt="" class="img-responsive"></figure><span class="icon icon-xxs fa-link"></span></a>
                  <div class="offset-top-10">
                    <h5 class="text-primary text-bold"><a href="blog-post-page.html" class="post-news-title">Improving on Strategic Sourcing</a></h5>
                  </div>
                  <div class="offset-top-15">
                    <div class="post-meta"><span class="icon icon-xxs fa-calendar text-gray text-middle"></span>
                      <time datetime="2016-01-01" class="text-gray inset-left-5 text-middle">26 January 2016, 15:34</time>
                    </div>
                  </div>
                  <p>There is an organizational expectation that transportation modes will be sourced and cost will be taken out of the network with some regularity.</p>
                </article>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
                <article class="post-news"><a class="thumbnail-default" href="blog-post-page.html" target="_self">
                            <figure><img width="370" height="270" src="images/news-02-370x270.jpg" alt="" class="img-responsive"></figure><span class="icon icon-xxs fa-link"></span></a>
                  <div class="offset-top-10">
                    <h5 class="text-primary text-bold"><a href="blog-post-page.html" class="post-news-title">How Transportation and Procurement Can Improve Spend</a></h5>
                  </div>
                  <div class="offset-top-15">
                    <div class="post-meta"><span class="icon icon-xxs fa-calendar text-gray text-middle"></span>
                      <time datetime="2016-01-01" class="text-gray inset-left-5 text-middle">26 January 2016, 15:34</time>
                    </div>
                  </div>
                  <p>Negotiating truckload rates has always been a key element to transportation relationships and budgeting — and it always will be.</p>
                </article>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
                <article class="post-news"><a class="thumbnail-default" href="blog-post-page.html" target="_self">
                            <figure><img width="370" height="270" src="images/news-03-370x270.jpg" alt="" class="img-responsive"></figure><span class="icon icon-xxs fa-link"></span></a>
                  <div class="offset-top-10">
                    <h5 class="text-primary text-bold"><a href="blog-post-page.html" class="post-news-title">Predictive Analytics Comes to the Logistics Industry</a></h5>
                  </div>
                  <div class="offset-top-15">
                    <div class="post-meta"><span class="icon icon-xxs fa-calendar text-gray text-middle"></span>
                      <time datetime="2016-01-01" class="text-gray inset-left-5 text-middle">26 January 2016, 15:34</time>
                    </div>
                  </div>
                  <p>I’m not sure we have a good understanding in the field of how predictive analytics differs from forecasting.</p>
                </article>
              </div>
            </div>
            <div class="offset-top-50"><a href="blog-archive.html" class="btn btn-primary btn-sm">view all news</a></div>
          </div>
        </section>
        <!-- Testimonials-->
        <section class="section-80 section-md-top-65 section-md-bottom-100 bg-dark-blue context-dark section-skew section-skew-wide">
          <div class="skew-block"></div>
          <div class="shell text-md-left">
            <h2>Testimonials</h2>
            <hr class="divider divider-lg bg-primary hr-md-left-0">
            <div class="offset-top-50">
              <div data-loop="false" data-items="1" data-dots="true" data-mouse-drag="false" data-sm-items="2" data-nav="false" data-margin="30" class="owl-carousel owl-carousel-default">
                <div>
                  <div class="quote">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><img src="images/users/user-evelyn-fisher-140x140.jpg" width="140" height="140" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <div class="inset-md-right-40">
                          <p>
                            <q>The customer service has been second to none!  This is highlighted by their dependability, communication and “get it done attitude.”  Thanks to all the team for your help!</q>
                          </p>
                          <p>
                            <cite>Evelyn Fisher</cite>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="quote">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><img src="images/users/user-lawrence-sims-140x140.jpg" width="140" height="140" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <div class="inset-md-right-40">
                          <p>
                            <q>I have had the pleasure of working with Transitec for just over 2 years as a third party carrier. The staff is knowledgeable, helpful, pleasant and quick to respond.</q>
                          </p>
                          <p>
                            <cite>Lawrence Sims</cite>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="quote">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><img src="images/users/user-cristal-smith-270x270.jpg" width="140" height="140" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <div class="inset-md-right-40">
                          <p>
                            <q>Thank you all so much for your help through 2015. It’s been great working with you everything running smooth (very unusual in my world) looking forward to more in 2016.</q>
                          </p>
                          <p>
                            <cite>Cristal Smith</cite>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="quote">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><img src="images/users/user-patrick-pool-170x170.jpg" width="140" height="140" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <div class="inset-md-right-40">
                          <p>
                            <q>The customer service has been second to none!  This is highlighted by their dependability, communication and “get it done attitude.”  Thanks to all the team for your help!</q>
                          </p>
                          <p>
                            <cite>Patrick Pool</cite>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="quote">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><img src="images/users/user-sam-kromstain-270x270.jpg" width="140" height="140" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <div class="inset-md-right-40">
                          <p>
                            <q>I have had the pleasure of working with Transitec for just over 2 years as a third party carrier. The staff is knowledgeable, helpful, pleasant and quick to respond.</q>
                          </p>
                          <p>
                            <cite>Sam Kromstain</cite>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="quote">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><img src="images/users/user-eva-pool-270x270.jpg" width="140" height="140" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <div class="inset-md-right-40">
                          <p>
                            <q>Thank you all so much for your help through 2015. It’s been great working with you everything running smooth (very unusual in my world) looking forward to more in 2016.</q>
                          </p>
                          <p>
                            <cite>Eva Pool</cite>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <footer class="section-65 page-footer bg-lightest section-skew">
        <div class="skew-block"></div>
        <div class="shell">
          <div class="range range-xs-center range-sm-middle">
            <div class="cell-xs-10 cell-md-3 text-md-left cell-md-push-1">
              <!--Footer brand--><a href="index.html"><img width='164' height='76' src='images/logo.png' alt=''/></a>
            </div>
            <div class="cell-xs-10 cell-md-3 text-md-right cell-md-push-3 offset-top-20 offset-md-top-0">
              <ul class="list-inline list-inline-dark">
                <li><a href="#" class="icon icon-xxs fa-facebook"></a></li>
                <li><a href="#" class="icon icon-xxs fa-twitter"></a></li>
                <li><a href="#" class="icon icon-xxs fa-pinterest"></a></li>
                <li><a href="#" class="icon icon-xxs fa-vimeo"></a></li>
                <li><a href="#" class="icon icon-xxs fa-google"></a></li>
                <li><a href="#" class="icon icon-xxs fa-rss"></a></li>
              </ul>
            </div>
            <div class="cell-xs-10 cell-md-6 cell-md-push-2 offset-top-20 offset-md-top-0">
              <!-- {%FOOTER_LINK}-->
              <p class="text-gray">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a href="privacy.html" class="text-dark">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
            <button title="Share" class="pswp__button pswp__button--share"></button>
            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
          <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- begin olark code-->
    
    
    <!-- end olark code-->

  </body>
</html>