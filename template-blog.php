<?php
/*
Template Name: Blog
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
	<!--Blog-->
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12 no-padding">
					<div class="col-md-offset-2 col-md-8">
						<?php echo do_shortcode('[facetwp facet="search"]'); ?>
					</div>
					<div class="col-sm-3 col-md-push-9">
						<!--<div class="filters">
							<?php echo do_shortcode('[facetwp facet="categories"]'); ?>							
						</div>-->
						<ul>
							<a href="artigos"><li><img src="<?php bloginfo('template_url'); ?>/img/icons/dashicons/format-aside.svg">Artigos</li></a>
							<a href="textos"><li><img src="<?php bloginfo('template_url'); ?>/img/icons/dashicons/media-text.svg">Textos</li></a>
							<a href="fotos/?fwp_categories=fotos"><li><img src="<?php bloginfo('template_url'); ?>/img/icons/dashicons/format-gallery.svg">Fotos</li></a>
							<a href="filmes"><li><img src="<?php bloginfo('template_url'); ?>/img/icons/dashicons/format-video.svg">Filmes</li></a>							
							<a href="postagens/videos/?fwp_categories=video"><li><img src="<?php bloginfo('template_url'); ?>/img/icons/dashicons/video-alt3.svg">Vídeos</li></a>
							<a href="podcasts"><li><img src="<?php bloginfo('template_url'); ?>/img/icons/dashicons/microphone.svg">Podcasts</li></a>
							<a href="livros"><li><img src="<?php bloginfo('template_url'); ?>/img/icons/dashicons/book.svg">Livros</li></a>
							<a href="links-recomendados"><li><img src="<?php bloginfo('template_url'); ?>/img/icons/dashicons/admin-links.svg">Links</li></a>							
						</ul>
					</div>
					<div class="col-sm-9 col-md-pull-3">
						<?php echo do_shortcode('[facetwp template="blog"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Blog-->
    </section>
</main>
<?php get_footer();	?>