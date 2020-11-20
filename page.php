<?php
/*Ajout du header*/
get_header();
?>

<!--MAIN DE LA PAGE-->
<main class="content__page">
    <div class="content__page__texts">
        <?php the_content(); ?>
    </div>

    <!--AJOUT DES LIENS INTERNES-->
    <div class="content__page__links">
        <h3>Voir aussi</h3>
        <div class="content__page__links__element">
            <img src="<?php echo get_template_directory_uri(); ?>\images\logo_comprendre_et_agir.svg" alt="Logo Comprendre et Agir"><br />
            <a href="">Le cycle de conférence</a>
        </div>
    </div>
</main>

<?php
/*Ajout du footer*/
get_footer();
?>