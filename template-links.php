<?php
/*
Template Name: Links Recomendados
*/
?>
<?php get_header(); ?>
<main>
	<!--Banner-->
    <section id="banner">
        <div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
			<div class="content--wrapper">
				<div class="content center">
					<?php the_title( '<h1 class="uppercase">', '</h1>' ); ?>
				</div>
			</div>
		</div>
    </section>
	<!--/Banner-->
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
	<!--Links Recomendados-->
	<section id="more-interest">
		<div class="container">
			<?php the_field('description'); ?>
			<div class="row">
				<?php
				// It's a paged query
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				// Query parameters
				$args = array(
					'post_type' => 'link',
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
				<div class="col-md-4">
					<div class="card">
						<a href="<?php the_field('link'); ?>" target="_blank">
							<h3 class="uppercase"><?php the_title(); ?></h3>
							<div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
							</div>
						</a>
						<p class="description hidden-xs">
							<?php the_field('description'); ?>
						</p>
					</div>
				</div>
				<?php endwhile; ?>
				<?php if ($total_posts > $posts_per_page) : ?>
				<?php endif ?>
				<?php wp_reset_postdata();
				endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<!--/Links Recomendados-->
</main>
<?php get_footer();	?>