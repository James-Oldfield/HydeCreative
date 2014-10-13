<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="col-lg-12 single">
<h2>Archive</h2>
<div class="archive-entries">
    <?php wp_get_archives('type=alpha'); ?>
</div>
    
</div>

<div class="text-center social-icons col-lg-12">
    
    <hr>
    
    <a href="https://www.facebook.com/smiths.magazine" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.svg" width="50px"></a>
    <a href="https://twitter.com/SmithsMagazine" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" width="50px"></a>
    <a href="http://instagram.com/smithsmagazine" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/insta.svg" width="50px"></a>
    <a href="http://smithsmagazinegsu.tumblr.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tumblr.svg" width="50px"></a>
    
    
</div>


<?php get_template_part( 'credit' ); ?>

<!--JavaScript-->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--B.S-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>