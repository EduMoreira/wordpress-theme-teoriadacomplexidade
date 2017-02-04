<?php
/*
Template Name: Sobre
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
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="uppercase">Sobre o Blog</h1>
                    <p><?php the_field('about'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="creator">
        <div class="container">
            <div class="row">
                    <a title="" href="<?php the_field('img_creator'); ?>" alt"" data-rel="lightbox-gallery-1">
                        <div class="col-md-4">
                            <div class="background" style="background-image:url(<?php the_field('img_creator'); ?>);"></div>
                            <div class="site">
                                <a target="_blank" href="http://juliotorres.ws">www.juliotorres.ws</a>
                            </div>
                        </div>
                    </a>
                    <div class="col-md-8">
                        <h1 class="uppercase">Sobre o Prof. JÚlio Torres</h1>
                        <h2>O Idealizador</h2>
                        <p><?php the_field('about_creator'); ?></p>
                    </div>
            </div>
        </div>
    </section>
</main>
<a href="http://instagram.com/teoriadacomplexidade/" target=_blank><div class="more-site">Veja a galeria completa no Instagram</div></a>
<?php get_sidebar( 'instagram' ); ?>
<?php get_footer();	?>