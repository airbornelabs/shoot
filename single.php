<?php get_header(); ?>
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 <article>
	  <?php the_content(); ?>
	  <div class="meta">
	  	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	  </div>

	 </article>

	 <?php endwhile; else: ?>

	 <p>No images were found, please try again.</p>

	 <?php endif; ?>

	 <div class="pagination">
	 	<div class="left"><?php previous_post_link(); ?> </div>
		<div class="alignright"><?php next_post_link(); ?></div>
	 </div>

<?php get_footer(); ?>