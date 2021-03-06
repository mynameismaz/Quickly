<?php get_header(); ?>
<?php get_template_part( 'template_parts/header/cover', 'index' ); ?>

<?php if ( ! isset( $content_width ) ) $content_width = 900; ?>

<section class="container">
	<div class="row">
		<?php
			// change the layout according to the user chose to get or not the sidebar 
			// $activate_sidebar = esc_attr( get_option( 'sidebar-status' ) ); 
			// print $activate_sidebar === 'yes' ? '<div class="col-12 col-md-8">' : '<div class="col-12 col-md-8 offset-md-2">'; 
			print '<main class="col-12 col-md-8 offset-md-2" role="main">';
		?>
			<!-- articles -->
			<?php if ( have_posts() ): ?>
				<?php while( have_posts() ): the_post(); ?>
					<?php get_template_part( 'template_parts/content', get_post_format() ); ?>
				<?php endwhile; ?>
			<?php endif ?>

			<!-- posts navigation -->
			<div class="col-md-8 posts-navigation clearfix">
				<?php echo get_previous_posts_link( sprintf( __( 'Next%s', 'quickly' ), '<span class="sr-only">'.__('See next articles', 'quickly').'</span>' ) ) ?>
				<?php echo get_next_posts_link( sprintf( __( 'Previous', 'quickly' ), '<span class="sr-only">'.__('See previous articles', 'quickly').'</span>' ) ) ?>
				<?php wp_link_pages(array());  ?>
			</div>
		</main>

		<?php 
			// if the user wants a sidebar, give him/her a sidebar
			// if( $activate_sidebar === 'yes' ) get_sidebar();  
		?>
		
	</div>
</section>
<?php get_footer(); ?>