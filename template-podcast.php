<?php
/*
Template Name: PodCasts
*/
?>
<?php get_header(); ?>
<main>
	<section id="banner">
        <div class="background" style="background-image:url(<?php the_field('cover'); ?>);"></div>
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
	<!--PodCasts-->
	<section id="article">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_field('title'); ?></h1>
					<h2><?php the_field('subtitle'); ?></h2>
				</div>
				<div class="col-md-12">
					<?php
					// It's a paged query
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					// Query parameters
					$args = array(
						'post_type' => 'podcast',
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
							<div class="col-4 col-md-3">
								<div class="background" style="background-image:url(<?php the_field('cover_media'); ?>);background-color:<?php the_field('color_cover'); ?>;">
									<h1 class="title"><?php the_title(); ?></h1>
								</div>
								<h2><?php the_field('sub_ttitle_media'); ?></h2>
							</div>
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
	<!--PodCasts-->
</main>
<?php get_footer();	?>