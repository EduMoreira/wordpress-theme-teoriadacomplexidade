<?php
/*
Template Name: Livros
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
	<nav>
		<div class="scroll-menu">
			<a href="/index.php/blog">Blog</a>
			<a href="/index.php/blog/artigos">Artigos</a>
			<a href="/index.php/blog/textos">Textos</a>
			<a href="/index.php/blog/fotos/?fwp_categories=fotos">Fotos</a>
			<a href="/index.php/blog/filmes">Filmes</a>
			<a href="/index.php/blog/postagens/videos/?fwp_categories=video">Vídeos</a>
			<a href="/index.php/blog/podcasts">Podcasts</a>
			<a href="/index.php/blog/livros">Livros</a>
			<a href="/index.php/blog/links-recomendados">Links</a>
		</div>
	</nav>
	<section id="posts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!--Search-->
					<div class="col-md-offset-2 col-md-8">
						<?php echo do_shortcode('[facetwp facet="search"]'); ?>
					</div>
					<!--/Search-->
					<div class="col-md-12"><?php the_field('description'); ?></div>
					<?php
					// It's a paged query
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					// Query parameters
					$args = array(
						'post_type' => 'livro',
						'post_status' => 'publish',
						'paged' => $paged,
						'posts_per_page' => 24,
						'orderby' => 'date',
						'order' => 'DESC',
					);
					// Fetch the posts
					$the_query = new WP_Query($args);
					$total_posts = $the_query->found_posts;
					// The loop
					if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="col-md-2 col-xs-6">
								<div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
									<div class="content--wrapper">
										<div class="content center">
										</div>
									</div>
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
				<div class="col-md-12">
					<?php echo do_shortcode('[facetwp pager="true"]'); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();	?>