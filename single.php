<?php get_header(); ?>
<?php
    if (get_the_ID() == 37) {
        include('single-home.php');
    } elseif (get_the_ID() == 39) {
        include('single-about-me.php');
    } elseif (get_the_ID() == 41) {
        include('single-gallery.php');
    } elseif (get_the_ID() == 44) {
        include('single-contacts.php');
    } elseif (in_category(array(12))) {
        include('single-gallery-category.php');

    } elseif (in_category(array(4,7,8,5,6,9))) {
        include('single-product.php');
    }
?>
<?php include("html-footer.php"); ?>
<?php get_footer(); ?>
