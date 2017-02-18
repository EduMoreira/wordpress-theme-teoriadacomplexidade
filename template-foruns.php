<?php
/*
Template Name: Fóruns
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
	<section id="forum">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
						<?php
						// It's a paged query
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						// Query parameters
						$args = array(
							'post_type' => 'forum',
							'post_status' => 'publish',
							'paged' => $paged,
							'posts_per_page' => 12,
							'orderby' => 'date',
							'order' => 'DESC',
						);
						// Fetch the posts
						$the_query = new WP_Query($args);
						$total_posts = $the_query->found_posts;
						// The loop
						if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-md-12">
                                <section>
                                    <h1 class="title"><?php the_title(); ?></h1>
									<p>Nesse forum <?php comments_number( 'seja o primeiro a comentar', 'existe um comentario', 'há % comentários' ); ?>.</p>
                             		<p><?php the_field('descript'); ?></p>
                                    <a class="btn btn-blue" href="<?php the_permalink(); ?>">Participar</a>                                     
                                </section>
							</div>
						<?php endwhile; ?>
						<?php if ($total_posts > $posts_per_page) : ?>
						<?php endif ?>
						<?php wp_reset_postdata();
						endif;
						wp_reset_query(); ?>
				</div>
				<!--<div class="col-md-3">
					<?php     $comments = get_comments('status=approve&amp;number=5'); ?>
					<ul>
					<?php foreach ($comments as $comment) { ?>
					<li>
					<?php echo get_avatar( $comment, '35' ); ?>
					<a href="<?php echo get_permalink($comment->ID); ?>#comment-<?php echo $comment->comment_ID; ?>" title="on <?php echo $comment->post_title; ?>"> <?php echo wp_html_excerpt( $comment->comment_content, 35 ); ?>... </a>
					</li>
					<?php }  ?>
					</ul>
				</div>-->
				<div class="col-md-12">
					<?php echo do_shortcode('[facetwp pager="true"]'); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();	?>