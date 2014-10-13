<?php get_header(); ?>
<div class="container main text-center">
    
<!--post loop-->
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
        
        <!--display thumbnail loop-->
        <div class="landing-page">

            <div class="col-left col-xs-12 col-md-6">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
            </div>

            <div class="col-right col-xs-12 col-md-6">
            <?php the_content() ?>
            </div>
            
        </div>    

        <!--END display thumbnail loop-->
    
	<?php endwhile;
else :
	echo wpautop( '<p class="sorry">Sorry, no posts were found</p>' );
endif;
?>
    
</div>

<?php get_footer(); ?>

