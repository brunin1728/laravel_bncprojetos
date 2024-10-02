<?php 

include("pages/header.php");
?>

    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Carregando...</p>
      </div>
    </div>
    <div class="page">
    

    <?php include("pages/menu.php"); ?>
      





      

      <!-- SLIDE -->
      <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="images/slider-4-slide-1-1920x678.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Enjoy the Best Destinations with Our Travel Agency</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Explore</span><span class="font-weight-bold"> The World</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/slider-4-slide-1-1920x678.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">A team of professional Travel Experts</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Trust</span><span class="font-weight-bold"> Our Experience</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/slider-4-slide-1-1920x678.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Build your Next Holiday Trip with Us</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Create</span><span class="font-weight-bold"> Your Tour</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
      </section>
















      <!-- Section Box Categories-->
      <section class="section section-lg section-top-1 bg-gray-4">
        <div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="pagina-tour"><img src="images/cta-1-368x420.jpg" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Tour #1</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="pagina-tour"><img src="images/cta-2-368x420.jpg" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Tour #2</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="pagina-tour"><img src="images/cta-3-368x420.jpg" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Tour #3</h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><a class="link-classic wow fadeInUp" href="tours">Todos os Tours<span></span></a>
          <!-- Owl Carousel-->
        </div>
      </section>
      <!-- Discover New Horizons-->












      <!--	POR QUE FAZER SEU TOUR COM A GENTE -->
      <section class="section section-sm">
      <h3 class="Gilroy-ExtraBold"  style="color: #1bbaba">Porque fazer seu tour com a gente</h3>
      <br>
      <div class="parallax-container" data-parallax-img="images/rio-1991056_1920.jpg" style="padding-top: 20px; padding-bottom: 20px">
        <div class="container">
          
          <div class="row row-30 " >

            
            <?php $i=1; while($i <=6){ ?>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">EXCELÊNCIA</a></h5>
                    <p class="box-icon-classic-text">
                      · Guia e transporte de back up em caso de baixas
                      <br>
· Empresa de turismo Brasileira Premiada no Trip Advisor
                    </p>
                  </div>
                </div>
              </article>
            </div>

            <?php $i++; } ?>
            
        


          </div>
        </div>
        </div>
      </section>








      <!-- Hot tours-->
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown Gilroy-ExtraBold" style="color: #1bbaba">Os melhores Tours</span></h3>
          <div class="row row-sm row-40 row-md-50">
            
                
          <?php $i=1; 
          while($i <= 2){ 
            ?>

          <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure" href="pagina-tour"><img src="images/product-big-2-600x366.jpg" alt="" width="600" height="366"/></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title"><a href="pagina-tour">Copacabana - Rio de Janeiro/Brasil</a></h5>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating">
                            <span class="icon material-icons-star"></span>
                            <span class="icon material-icons-star"></span>
                            <span class="icon material-icons-star"></span>
                            <span class="icon material-icons-star"></span>
                            <span class="icon material-icons-star"></span>
                            <!--<span class="icon material-icons-star_half"></span> -->
                        </div><a class="product-big-reviews" href="pagina-tour">5 Avaliações de Clientes</a>
                      </div>
                      <p class="product-big-text">Benidorm is a buzzing resort with a big reputation for beach holidays. Situated in sunny Costa Blanca, the town is one of the original Spanish beach resorts...</p>
                      <a class="button button-black-outline button-ujarak" href="pagina-tour">Saiba Mais</a>
                      <div class="product-big-price-wrap">
                        <span style="font-size: 8px; color: #dddddd">A PARTIR DE</span>
                        <span class="product-big-price">R$ 790</span>
                    </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>


          <?php $i++; } ?>
          </div>
        </div>
      </section>













      <!-- Section Subscribe-->
      <section class="section bg-default text-center offset-top-50">
        <div class="parallax-container" data-parallax-img="images/parallax-1-1920x850.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
            <div class="container">
              <h2 class="heading-2 oh font-weight-normal wow slideInDown">
                <span class="d-block font-weight-semi-bold">Viajens de primeira classe</span>
              <span class="d-block font-weight-light">estão esperando por você!</span></h2>
              <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Nossa agência oferece aos viajantes diversos passeios e excursões com destinos em todo o mundo. Navegue em nosso site para encontrar o passeio dos seus sonhos!</p>
              <a class="button button-secondary button-pipaluk" href="tours">Veja todos os Tours</a>
            </div>
          </div>
        </div>
      </section>
      <!--	Instagrram wondertour-->
      <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
          <br><Br>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/copacabana-beach-65598_1280.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/copacabana-beach-65598_1280.jpg" data-lightgallery="item"><img src="images/copacabana-beach-65598_1280.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/copacabana-beach-65598_1280.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/copacabana-beach-65598_1280.jpg" data-lightgallery="item"><img src="images/copacabana-beach-65598_1280.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/copacabana-beach-65598_1280.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-3-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-4-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-4-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-5-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-5-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-6-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-6-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-7-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-7-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
          </div>
        </div>
      </section>
     







      


      <section class="section section-md bg-gray-4">
        <div class="container" bis_skin_checked="1">
          <h3 class="wow fadeInLeft Gilroy-ExtraBold" style="visibility: visible; animation-name: fadeInLeft; color: #1bbaba">O que as pessoas dizem</h3>
          <div class="row row-xxl row-70 justify-content-center" bis_skin_checked="1">
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;" bis_skin_checked="1">
              <!-- Quote Creative-->
              <article class="quote-creative"><a class="quote-creative-figure" href="#"><img class="img-circles" src="images/user-5-87x87.jpg" alt="" width="87" height="87"></a>
                <div class="quote-creative-text" bis_skin_checked="1">
                  <p class="q">Just wanted to say many, many thanks for helping me set up an amazing Costa Rican adventure! My nephew and I had a great time! All of the accommodations were perfect, thank you!</p>
                </div>
                <h5 class="quote-creative-cite"><a href="#">Rupert Wood</a></h5>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;" bis_skin_checked="1">
              <!-- Quote Creative-->
              <article class="quote-creative"><a class="quote-creative-figure" href="#"><img class="img-circles" src="images/user-6-87x87.jpg" alt="" width="87" height="87"></a>
                <div class="quote-creative-text" bis_skin_checked="1">
                  <p class="q">I wanted to thank you very much for planning the trip to France for my sister and me. It was amazing and exceeded my expectations! We had a wonderful time and were very pleased.</p>
                </div>
                <h5 class="quote-creative-cite"><a href="#">Catherine Williams</a></h5>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;" bis_skin_checked="1">
              <!-- Quote Creative-->
              <article class="quote-creative"><a class="quote-creative-figure" href="#"><img class="img-circles" src="images/user-7-87x87.jpg" alt="" width="87" height="87"></a>
                <div class="quote-creative-text" bis_skin_checked="1">
                  <p class="q">We had a marvelous time in our travels to Madagascar, Zimbabwe, and Botswana, we had just wonderful experiences. Your service was amazing and everyone was very attentive!</p>
                </div>
                <h5 class="quote-creative-cite"><a href="#">Sam Peterson</a></h5>
              </article>
            </div>
          </div>
        </div>
      </section>














      <?php include('pages/footer.php'); ?>