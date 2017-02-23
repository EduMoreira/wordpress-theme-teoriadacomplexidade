<?php
/*
Template Name: Postagens
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
	<nav>
		<div class="scroll-menu">
			<a href="artigos">Artigos</a>
			<a href="textos">Textos</a>
			<a href="fotos/?fwp_categories=fotos">Fotos</a>
			<a href="filmes">Filmes</a>
			<a href="postagens/videos/?fwp_categories=video">Vídeos</a>
			<a href="podcasts">Podcasts</a>
			<a href="livros">Livros</a>
			<a href="links-recomendados">Links</a>
		</div>
	</nav>
	<!--Posts-->
	<section id="posts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-offset-2 col-md-8">
						<?php echo do_shortcode('[facetwp facet="search"]'); ?>
					</div>
					<div class="col-md-12">
						<?php the_field('description'); ?>
					</div>
					<?php echo do_shortcode('[facetwp template="teoria_da_complexidade"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--/Posts-->
</main>
<?php get_footer();	?>