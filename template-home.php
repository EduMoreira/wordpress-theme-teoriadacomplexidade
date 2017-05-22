<?php
/*
Template Name: Início
*/
?>
<?php get_header(); ?>
	<!--Carousel-->
	<section id="banner" class="carousel">
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<?php if( have_rows('carousel') ): ?>
				<div class="carousel-inner" role="listbox">
					<?php while( have_rows('carousel') ): the_row(); ?>
						<div class="carousel-item <?php echo get_sub_field('initial_carousel')?'active':''; ?> background <?php the_sub_field('background_color'); ?>">
							<div class="content--wrapper background" style="background-image:url(<?php the_sub_field('carousel_image_desktop'); ?>);">
								<div class="content center <?php echo get_sub_field('carousel_image_desktop')?'emphasize':''; ?>">
									<div class="container">
										<div class="offset-md-2 col-md-8">
											<div class="col-md-12">
												<img class="<?php echo get_sub_field('banner_primary_image')?'offset-md-2 highlight-img':'hidden-md-up'; ?>" src="<?php the_sub_field('banner_primary_image'); ?>">
											</div>
											<div class="col-md-12">
												<h1 class="<?php the_sub_field('background_pattern'); ?> uppercase"><?php the_sub_field('carousel_title'); ?></h1>
												<h2 class="<?php the_sub_field('background_pattern'); ?> uppercase"><?php the_sub_field('carousel_subtitle'); ?></h2>
												<a class="btn btn-<?php the_sub_field('background_pattern'); ?> <?php echo get_sub_field('carousel_link')?'':'hidden-up'; ?>" value="Contato" href="<?php the_sub_field('carousel_link'); ?>">Saiba Mais</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Proximo</span>
					</a>
					<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<ol class="carousel-indicators">
						<?php if( have_rows('carousel') ): ?>
							<?php $count = 0 ?>
							<?php while( have_rows('carousel') ): the_row(); ?>
								<li data-target="#carousel" data-slide-to="<?php echo $count++; ?>" class="<?php echo get_sub_field('initial_case')?'active':''; ?>"></li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ol>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<!--/Carousel-->
	<!--Categories-->
	<section id="categories">
		<div class="container">
			<!--<h1 class="uppercase">Escolha a Área do seu interesse</h1>-->
			<div class="row">
				<?php if( have_rows('areas') ): ?>                        
					<?php while( have_rows('areas') ): the_row(); ?>						
						<div class="col-6 col-md-4 col-lg-2">
							<a href="<?php the_sub_field('link'); ?>">
								<div class="background" style="background-image:url(<?php the_sub_field('imagem'); ?>);"></div>
								<h3 class="uppercase"><?php the_sub_field('title'); ?></h3>
							</a>
						</div>
					<?php endwhile; ?>                        
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!--/Categories-->
	<!--Feed-->
	<section id="feed">
		<div class="container">
			<div class="row">
				<!--<div class="col-md-12">
					<h1 class="uppercase">Os Posts mais recentes</h1>
				</div>-->
				<div class="col-md-9">
					<?php echo do_shortcode('[facetwp template="posts"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--/Feed-->
</main>
<?php get_footer();	?>