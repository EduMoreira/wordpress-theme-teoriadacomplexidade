<?php
/*
Template Name: Mais Áreas de Interesse
*/
?>
<?php get_header(); ?>
<main>
	<!--Carousel-->
    <section id="banner">
        <div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
			<div class="content--wrapper">
				<div class="content center">
					<?php the_title( '<h1 class="uppercase">', '</h1>' ); ?>
				</div>
			</div>
		</div>
    </section>
	<!--/Carousel-->
	<!--Categories-->
	<section id="more-interest">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_field('description'); ?>
				</div>
				<div class="col-md-12">
					<?php if( have_rows('more-interest') ): ?>                        
						<?php while( have_rows('more-interest') ): the_row(); ?>
							<div class="col-md-3">
								<div class="card">
									<a href="<?php the_sub_field('link'); ?>">
										<div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);">
											<h1 class="uppercase"><?php the_sub_field('title'); ?></h1>
										</div>
									</a>
									<p class="description hidden-xs"><?php the_sub_field('description'); ?></p>
									<a class="btn" href="<?php the_sub_field('link'); ?>">Mais</a>
								</div>
							</div>
						<?php endwhile; ?>                        
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!--/Categories-->
</main>
<?php get_footer();	?>