

<div class="blog-post">

	<!-- put permalink will make that title able to click and link to single page -->
	<h2 class="blog-post-title"><a href="<!?php the_permalink(); ?>"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

 <!-- the excerpt will only show the first 55 words of our post instead of the entire contents
 <!--?php the_excerpt(); ?-->

 <?php the_content(); ?>

</div><!-- /.blog-post -->
