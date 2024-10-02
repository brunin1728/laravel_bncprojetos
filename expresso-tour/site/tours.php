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
      


    <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Tours</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="/inicio">Ínicio</a></li>
              <li class="active">Tours</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/slider-4-slide-1-1920x678.jpg);"></div>
        </div>
      </section>
       

      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown Gilroy-ExtraBold" style="color: #1bbaba">Os melhores Tours</span></h3>
          <div class="row row-sm row-40 row-md-50">
            
          <?php $i=1; 
          while($i <= 5){ 
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






















      <?php include('pages/footer.php'); ?>