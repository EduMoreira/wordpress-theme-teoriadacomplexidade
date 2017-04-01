<?php
/*
Template Name: Início
*/
?>
<?php get_header(); ?>
	<!--Carousel-->
	<section id="banner" class="carousel">
		<div class="container-fluid no-padding">
			<div class="raw">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<?php if( have_rows('carousel') ): ?>
						<div class="carousel-inner" role="listbox">
							<?php while( have_rows('carousel') ): the_row(); ?>
								<div class="item <?php echo get_sub_field('initial_carousel')?'active':''; ?> background <?php the_sub_field('background_color'); ?>">
										<div class="content--wrapper background" style="background-image:url(<?php the_sub_field('carousel_image_desktop'); ?>);">
											<div class="content center">
												<div class="container">
													<div class="row">
														<div class="col-md-12">
															<img class="<?php echo get_sub_field('banner_primary_image')?'col-md-offset-1 highlight-img':'hidden'; ?>" src="<?php the_sub_field('banner_primary_image'); ?>">
														</div>
													</div>
													<div class="row">
														<div class="hero-text <?php echo get_sub_field('banner_secondary_image')?'col-md-6':'col-md-offset-2 col-md-8'; ?>">
															<h1 class="<?php the_sub_field('background_pattern'); ?> uppercase"><?php the_sub_field('carousel_title'); ?></h1>
															<h2 class="<?php the_sub_field('background_pattern'); ?>"><?php the_sub_field('carousel_subtitle'); ?></h2>
															<a class="btn btn-<?php the_sub_field('background_pattern'); ?> <?php echo get_sub_field('carousel_link')?'':'hidden'; ?>" value="Contato" href="<?php the_sub_field('carousel_link'); ?>">Saiba Mais</a>
														</div>
														<div class="col-md-offset-3 col-md-3 hidden-sm hidden-xs">
															<a href="<?php the_sub_field('carousel_link'); ?>">
																<img class="<?php echo get_sub_field('banner_secondary_image')?'secondary-img':'hidden'; ?>" src="<?php the_sub_field('banner_secondary_image'); ?>">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
							<?php endwhile; ?>
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
			</div>
		</div>
	</section>
	<!--/Carousel-->
	<!--Categories-->
	<section id="categories">
		<div class="container-fluid">
			<div class="row no-padding">
				<div class="col-md-12"><h1 class="uppercase">Escolha a Área do seu interesse</h1></div>
				<?php if( have_rows('areas') ): ?>                        
					<?php while( have_rows('areas') ): the_row(); ?>
						<a href="<?php the_sub_field('link'); ?>">
							<div class="col-md-2 .col-sm-4 col-xs-6">
								<section>
									<div class="background" style="background-image:url(<?php the_sub_field('imagem'); ?>);"></div>
									<h1 class="uppercase"><?php the_sub_field('title'); ?></h1>
								</section>
							</div>
						</a>
					<?php endwhile; ?>                        
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!--/Categories-->
	<!--Feed-->
	<section id="feed">
		<div class="container">
			<!--Feed-->
			<div class="row no-padding">
				<div class="no-padding">
					<div class="col-md-12"><h1 class="uppercase">Os Posts mais recentes</h1></div>
					<?php echo do_shortcode('[facetwp template="posts"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--/Feed-->
</main>
<!--<script type="text/javascript">
        $(document).ready(function() {
           $('#myModal').modal('show');
        });
</script>-->
<?php get_footer();	?>