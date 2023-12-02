<?php
/* Template Name: Strona główna */ 

get_header(); ?>


<section id="top-site-heading" class="text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col banner-col">
                <h1><strong>Kancelaria Prawna - Waldemar Lenard</strong><br>Wiedza, doświadczenie, zaufanie... <br>Spokój...</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><br>Zgłoś się do nas!</p>
                <a href="<?php echo site_url('/'); ?>
" class="strona-button">Więcej...</a>
            </div>
        </div>
    </div>
</section>

<section id="what-we-do">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Co robimy?</h2>
                <p class="opisNaglowka">Slogan</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum:</p>
                <ul>
                    <li><strong>atrakcyjne</strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                    <li><strong>intuicyjne</strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                    <li><strong>perswazyjne</strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                    <li><strong>zoptymalizowane</strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum!</p>
            </div>
        </div>
    </div>
</section>

<section id="why-we" class="text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Dlaczego my?</h2>
                <p class="opisNaglowka">Współpraca z nami to przede wszystkim:</p>
            </div>
        </div>
        <div class="row assets-row">
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-book-bookmark"></i>
                <h3>Wieloletnie doświadczenie</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
            <i class="fa-solid fa-graduation-cap"></i>
                <h3>Ugruntowana wiedza</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-bullseye"></i>
                <h3>Indywidualne podejście</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-circle-info"></i>
                <h3>Rzetelne doradztwo</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
            <i class="fas fa-bed"></i>
                <h3>Spokój i bezpieczeństwo</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-phone-volume"></i>
                <h3>Wsparcie na każdym etapie</h3>
            </div>
        </div>

    </div>

</section>

<section id="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-5 d-none d-lg-flex image-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/glowna/team.webp" alt="Zespół">
            </div>
            <div class="col-12 col-lg-7 text-col">
                <h2>O nas</h2>
                <p>Naszą misją jest dostarczanie:</p>
                <ul>
                    <li><i class="fa-solid fa-bullseye"></i>indywidualnych</li>
                    <li><i class="fa-solid fa-money-bill-trend-up"></i>efektywnych</li>
                    <li><i class="fa-solid fa-piggy-bank"></i>przystępnych</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="<?php echo site_url('/o-nas'); ?>
" class="strona-button">Czytaj dalej...</a>
            </div>
        </div>
    </div>
</section>

<section id="fp-contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7 text-col">
                <h2>Skontaktuj się!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="tel:+48" class="strona-button">Zadzwoń!</a>
            </div>
            <div class="col-12 col-lg-5 d-none d-lg-flex image-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/glowna/phone.webp" alt="Telefon">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>