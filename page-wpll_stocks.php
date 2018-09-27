<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

			<?php
				$args =  array(
					//Argument for mine query
					//format 'parameter1' => 'value'
					// use => & need separate them wth a comma
					'post_type' => 'wpll_stocks',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);

				//Custom query
				 $custom_query = new WP_Query( $args );
				 //check that we have query result
    		if($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post();?>
				<!--$meta = get_post_meta($post->ID, 'your_field', true);?-->

				<!--Contents of the queried post result go here-->
				<div class="blog-post">
					<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				</div>

			<?php endwhile;endif; ?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

	<?php get_footer(); ?>
