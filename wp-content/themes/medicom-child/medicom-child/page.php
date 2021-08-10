<?php get_header('landing');?>
<div class="landing-page-content">
<?php while ( have_posts() ) : the_post(); ?>    
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer('landing');?>