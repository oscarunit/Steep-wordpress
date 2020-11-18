<?php
get_header();
?>
<main class="content__page">
    <div class="content__page__texts">
        <?php the_content(); ?>
    </div>
    <div class="content__page__links">
        <h3>Voir aussi</h3>
        <div class="content__page__links__element">
            <img src="http://localhost/Wordpress/wp-content\themes\steep\images\logo_comprendre_et_agir.svg" alt="Logo Comprendre et Agir"><br />
            <a href="">Le cycle de conférence</a>
        </div>
    </div>
</main>

<?php
get_footer();
?>