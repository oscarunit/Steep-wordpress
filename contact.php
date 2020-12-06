<?php
/*
Template Name: Contact
*/
?>

<?php
get_header();
?>
<!--MAIN CONTACT-->
<main class="content__page__contact">
  <div class="wrap">
    <?php
      /***RECUPERATION DU CONTENU EN Y AJOUTANT LA MAPS AINSI QUE L'ADRESSE */
      apply_filters( 'the_content', the_content());
    ?>
  </div>
</main>

<?php
get_footer();
?>