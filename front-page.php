<?php
get_header();
?>
<main>
<?php $value = apply_filters( 'the_content', the_content());?>
</main>

<?php
get_footer();
?>