<?php
/*Ajout du header*/
get_header();
?>

<!--MAIN ACCUEIL-->
<main>
<?php apply_filters( 'the_content', the_content());?>
</main>
<?php
/*Ajout du footer*/
get_footer();
?>