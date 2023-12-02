<?php

/* Template Name: strona-kontakt */ 

get_header(); ?>


<section id="kontakt-baner">
  <div class="container-fluid">
    <div class="row">
      <div class="col page-header-col">
        <h2 class="page-header">
          <strong>Kontakt</strong>
        </h2>
        <hr>
      </div>
    </div>
  </div>
</section>

<section id="kontakt-dane">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-sm-12 col-lg-5">

        <h3 class="column-heading">Formularz <span>kontaktowy</span></h3>

        <?php echo do_shortcode( '[wpforms id="47" title="false"]' ); ?>

      </div>
      <div class="col-sm-12 col-lg-6">

        <h3 class="column-heading">Nasze <span>dane</span></h3>

        <div class="contact-icon-box">
          <div class="row no-gutters">
            <div class="col-2 icon-col">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="col-10">
              <h2 class="contact-icon-title">Telefon</h2>
              <h3 class="contact-icon-content">
                <a href="tel:+48">+48 123 456 789</a>
              </h3>
            </div>
          </div>
        </div>

        <div class="contact-icon-box">
          <div class="row no-gutters">
            <div class="col-2 icon-col">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="col-10">
              <h2 class="contact-icon-title">Email</h2>
              <h3 class="contact-icon-content">
                <a href="mailto:">biuro@xyz.pl</a>
              </h3>
            </div>
          </div>
        </div>

        <div class="contact-icon-box">
          <div class="row no-gutters">
            <div class="col-2 icon-col">
              <i class="fas fa-map-marked-alt"></i>
            </div>
            <div class="col-10">
              <h2 class="contact-icon-title">Adres</h2>
              <h3 class="contact-icon-content">
                  <a href="" target="_blank">ul. , 00-000 Kraków</a>
              </h3>
            </div>
          </div>
        </div>

        <p class="contact-info-godziny">
          Biuro Obsługi Klienta czynne jest w godzinach:<br>
          Pn-Pt - 10-16<br>
          Zapraszamy do kontaktu
        </p>

        <p class="contact-info-firma">
          <strong>WizG</strong><br>
          xyz jest częścią  spółka z ograniczoną odpowiedzialnością z siedzibą w  przy ulicy , 00-000 xyz, wpisana do rejestru przedsiębiorców przez Sąd Rejonowy dla Krakowa-Śródmieścia w Krakowie, XII Wydział Gospodarczy pod numerem KRS , posiadająca REGON  oraz NIP 
        </p>

      </div>
    </div>

  </div>

</section>

<section id="map-siedziba-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3 class="column-heading">Mapa <span></span></h3>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5122.646981378067!2d19.941762643577594!3d50.06150311387938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b120455da67%3A0xc3c7f5071b750d33!2zUnluZWsgR8WCw7N3bnk!5e0!3m2!1spl!2spl!4v1699730481343!5m2!1spl!2spl" width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>