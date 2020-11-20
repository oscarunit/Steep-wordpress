<!--FOOTER-->
<footer>
    
    <!--Logo STEEP-->
    <div class="footer__content-logo">
        <img src="<?php echo get_template_directory_uri(); ?>\images\logo_steep_monochrome.svg" alt="Logo STEEP" class="footer__logo">
    </div>

    <div class="footer__content">

        <!--Logo Comprendre&Agir-->
        <div class="footer__content__logo">
            <img src="<?php echo get_template_directory_uri(); ?>\images\logo_comprendre_et_agir_monochrome.svg" alt="Logo Comprendre et Agir">
        </div>

        <!--Liens internes-->
        <div class="footer__content__link">
            <ul>
                <li><a href="<?php echo home_url( '/' )?>contact">Contacts</a></li>
                <li><a href="<?php echo home_url( '/' )?>mentions-legales">Mentions légales</a></li>
                <li><a href="<?php echo home_url( '/' )?>admin">Administration</a></li>
            </ul>
        </div>
    </div>

    <!--Crédit-->
    <div>
        <p>Un site conçu par l'agence Bzzz</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>