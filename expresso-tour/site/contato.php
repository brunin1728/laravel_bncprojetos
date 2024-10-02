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
      

      <!-- Contact information-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link" style="font-size: 20px !important"><a href="tel:+552199999999">+55 21 9999-9999</a></p>
                  <p class="box-contacts-link" style="font-size: 20px !important"><a href="tel:+552199999999">+55 21 9999-9999</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:CONTATO@EXPRESSOTOUR.COM.BR">contato@expressotour.com.br</a></p>
                  <p class="box-contacts-link"><a href="mailto:INFO@EXPRESSOTOUR.COM.BR">info@expressotour.com.br</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Entrar em contato</h3>
            </div>
            <div class="title-classic-text">
              <p>Se você tiver alguma dúvida, basta preencher o formulário de contato e responderemos em breve.</p>
            </div>
          </article>
          <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Seu nome</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-2">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone-2">Telefone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Mensagem</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Enviar Mensagem</button>
          </form>
        </div>
      </section>



      <?php include('pages/footer.php'); ?>