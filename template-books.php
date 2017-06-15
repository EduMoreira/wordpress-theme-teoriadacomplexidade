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
	<!-- Scroll Menu-->
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
	<!--/Scroll Menu-->
	<!--Search-->
	<section id="search">
		<div class="offset-md-2 col-md-8">
			<?php echo do_shortcode('[facetwp facet="search"]'); ?>
		</div>
	</section>
	<!--/Search-->
	<!--Livros-->
	<section id="posts">
		<div class="container">
			<?php the_field('description'); ?>
			<div class="row">
				<?php
				// It's a paged query
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				// Query parameters
				$args = array(
					'post_type' => 'livro',
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
									<div class="content center">
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				<?php if ($total_posts > $posts_per_page) : ?>
				<?php endif ?>
				<?php wp_reset_postdata();
				endif;
				wp_reset_query(); ?>
				<div class="col-md-12">
					<?php echo do_shortcode('[facetwp pager="true"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--/Livros-->
</main>
<?php get_footer();	?>