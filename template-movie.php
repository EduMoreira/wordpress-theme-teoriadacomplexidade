<?php
/*
Template Name: Filmes
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
			<a href="/index.php/blog/fotos">Fotos</a>
			<a href="/index.php/blog/filmes">Filmes</a>
			<a href="/index.php/blog/postagens/videos/?fwp_categories=video">Vídeos</a>
			<a href="/index.php/blog/podcasts">Podcasts</a>
			<a href="/index.php/blog/livros">Livros</a>
			<a href="/index.php/blog/links-recomendados">Links</a>
		</div>
	</nav>
	<section id="posts">
		<div class="container">
			<div class="offset-md-2 col-md-8">
				<?php echo do_shortcode('[facetwp facet="search"]'); ?>
			</div>
			<!--/Search-->
			<?php the_field('description'); ?>
			<div class="row">
				<!--Search-->
				<?php
				// It's a paged query
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				// Query parameters
				$args = array(
					'post_type' => 'filme',
					'post_status' => 'publish',
					'paged' => $paged,
					'posts_per_page' => 30,
					"orderby" => "title",
					"order" => "ASC",
				);
				// Fetch the posts
				$the_query = new WP_Query($args);
				$total_posts = $the_query->found_posts;
				// The loop
				if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-6 col-md-2">
						<a href="<?php the_permalink(); ?>">
							<div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
								<div class="content--wrapper">
									<div class="content center"></div>
								</div>
							</div>
							<?php the_title( '<h3 class="uppercase">', '</h3>' ); ?>
						</a>
					</div>
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
	</section>
</main>
<?php get_footer();	?>