<?php
/*
Template Name: Contact
*/
?>

<?php
get_header();
?>
<main class="content__page__contact">
    <div class="wrap">
    <?php

    $value = apply_filters( 'the_content', the_content());
  ?>
    </div>
</main>

<?php
get_footer();
?>