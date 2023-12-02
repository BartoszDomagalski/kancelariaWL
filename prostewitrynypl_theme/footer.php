<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProsteWitryny.pl_-_Start_theme
 */

?>

<footer id="footer" class="site-footer">
            
            <div class="container-fluid p-0">
                <div class="row no-gutters footer-links-row">
                    
                    <div class="col-12 col-lg-3 footer-brand-col">
                    
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logoTheme.png" alt="Logo" width="280" height="40" class="d-inline-block align-text-top">
                        
                        <div class="social-box">
                            <h3 class="footer-col-title">Śledź nas na:</h3>
                            <a href="" target="_blank" aria-label="Przejdź do firmowego facebooka"><i class="fa-brands fa-facebook-f footer-social-icon fb-footer"></i></a>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-6 col-lg-3 footer-offer-col">
                        
                        <h3 class="footer-col-title">Oferta</h3>
                        <ul class="footer-ul">
                        	<li class="footer-li">
                                <a href="<?php echo site_url('/'); ?>" class="footer-a">Firmowe linki</a>
                            </li>
                            
                        </ul>
                        
                    </div>
                    
                    <div class="col-6 col-lg-3 footer-pages-col">
                        
                        <h3 class="footer-col-title">Linki</h3>
                        <ul class="footer-ul">
                            
                            <li class="footer-li">
                                <a href="<?php echo site_url('/o-nas'); ?>" class="footer-a">O nas</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo site_url('/kontakt'); ?>" class="footer-a">Kontakt</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo site_url('/polityka-prywatnosci'); ?>" class="footer-a">Polityka prywatności</a>
                            </li>
                        </ul>
                        
                    </div>
                    
                    <div class="col-12 col-lg-3 footer-contact-col">          
                        <h3 class="footer-col-title">Kontakt</h3>
                        <p><a href="tel:+48"><i class="fa-solid fa-phone"></i> 123 456 789</a></p>
                        <p><a href="mailto:"><i class="fa-solid fa-envelope"></i> mail</a></p>
                        <p class="wizGoo">nazwa WizG</p>
                        <p><a href="" target="_blank"><i class="fa-solid fa-map-location-dot"></i> Adres</a></p>
                        
                        
                    </div>
                    
                </div>
                
                <div class="row no-gutters footer-copyright-row">
                    <div class="col-12 col-md-3 footer-copyright-col">
                        <p>Copyright &copy; <?php echo date("Y"); ?> Firma<br>Wszystkie prawa zastrzeżone</p>
                    </div>
                    <div class="col-12 col-md-7 footer-seo-col">
                        <h3>Podstawowy tekst SEO</h3>
                    </div>
                    <div class="col-12 col-md-2 footer-dev-col">
                        <p>
                            Projekt i wykonanie:<br>
                            <a href="https://prostewitryny.pl/">ProsteWitryny.pl</a>
                        </p>
                    </div>
                </div>
                
            </div>
            
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

