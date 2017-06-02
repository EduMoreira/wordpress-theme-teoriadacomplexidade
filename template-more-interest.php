<?php
/*
Template Name: Mais Áreas de Interesse
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
	<!--Categories-->
	<section id="more-interest">
		<div class="container">
			<?php the_field('description'); ?>
			<div class="row">
				<?php if( have_rows('more-interest') ): ?>                        
					<?php while( have_rows('more-interest') ): the_row(); ?>
						<div class="col-md-4">
							<div class="card">
								<a href="<?php the_sub_field('link'); ?>">
									<h3 class="uppercase"><?php the_sub_field('title'); ?></h3>
									<div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
								</a>
								<p class="description"><?php the_sub_field('description'); ?></p>
								<!--<a class="btn" href="<?php the_sub_field('link'); ?>">Mais</a>-->
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!--/Categories-->
</main>
<?php get_footer();	?>