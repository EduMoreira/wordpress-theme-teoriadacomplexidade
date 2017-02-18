<?php
/*
Template Name: Textos
*/
?>
<?php get_header(); ?>
<main>
    <section id="banner">
        <div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
			<div class="content--wrapper">
				<div class="content center">
					<?php the_title( '<h1 class="uppercase">', '</h1>' ); ?>
				</div>
			</div>
		</div>
    </section>
	<section id="articles">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<?php
						// It's a paged query
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						// Query parameters
						$args = array(
							'post_type' => 'texto',
							'post_status' => 'publish',
							'paged' => $paged,
							'posts_per_page' => 15,
							'orderby' => 'date',
							'order' => 'DESC',
						);
						// Fetch the posts
						$the_query = new WP_Query($args);
						$total_posts = $the_query->found_posts;
						// The loop
						if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>">
								<div class="col-md-3 col-xs-6">
									<div class="background" style="background-image:url(<?php the_field('cover_media'); ?>);">
										<h1 class="title"><?php the_title(); ?></h1>
                                        <h2><?php the_field('subtitle'); ?></h2>
										<div><p><?php the_field('authors'); ?></p></div>
									</div>
								</div>
								</a>
						<?php endwhile; ?>
						<?php if ($total_posts > $posts_per_page) : ?>
						<?php endif ?>
						<?php wp_reset_postdata();
						endif;
						wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();	?>