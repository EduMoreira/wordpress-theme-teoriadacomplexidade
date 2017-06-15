<?php
/*
Template Name: Artigos
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
	<!--Search-->
	<section id="search">
		<div class="offset-md-2 col-md-8">
			<?php echo do_shortcode('[facetwp facet="search"]'); ?>
		</div>
	</section>
	<!--/Search-->
	<!--Posts-->
	<section id="posts">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<?php the_field('description'); ?>
					<?php echo do_shortcode('[facetwp template="artigos"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--/Posts-->
</main>
<?php get_footer();	?>