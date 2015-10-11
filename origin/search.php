<?php get_header();?>
<?php get_sidebar(); ?>
<div id="main-content">
    <div class="post">
            <h3>Search Results:</h3>    
            <?php if(have_posts()) :  while(have_posts()) : the_post(); ?> 
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
                <p class="meta-data">By: <strong><?php the_author(); ?></strong> | On: <?php the_time('F j, Y'); ?></p>               
        <?php endwhile; else : ?>
			<h3> Nothing found!</h3>
		</div>

	<?php endif; ?>
    </div><!--end post-->
</div><!--end main-content-->
<?php get_sidebar('second'); ?>
<?php get_footer(); ?>


