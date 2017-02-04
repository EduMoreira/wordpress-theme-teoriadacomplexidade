<?php
/*
Template Name: Início
*/
?>
<?php get_header(); ?>
<!--Carousel-->
<main>
	<section id="banner" class="carousel">
		<div class="container-fluid no-padding">
			<div class="raw">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<?php if( have_rows('carousel') ): ?>
						<div class="carousel-inner" role="listbox">
							<?php while( have_rows('carousel') ): the_row(); ?>
								<div class="item<?php echo get_sub_field('initial_carousel')?' active':''; ?> <?php the_sub_field('background_pattern'); ?> background" style="background-color:<?php the_sub_field('background_color'); ?>;background-image:url(<?php the_sub_field('carousel_image_desktop'); ?>);">
										<div class="content--wrapper emphasize">
											<div class="content center">
												<div class="container">
													<div class="row">
														<div class="col-md-12">
															<img class="<?php echo get_sub_field('banner_primary_image')?'col-md-offset-1 highlight-img':'hidden'; ?>" src="<?php the_sub_field('banner_primary_image'); ?>">
														</div>
													</div>
													<div class="row">
														<div class="hero-text <?php echo get_sub_field('banner_secondary_image')?'col-md-6':'col-md-12'; ?>">
															<h1 class="<?php the_sub_field('background_pattern'); ?> uppercase col-md-12"><?php the_sub_field('carousel_title'); ?></h1>
															<p class="<?php the_sub_field('background_pattern'); ?> col-md-12"><?php the_sub_field('carousel_subtitle'); ?></p>
														</div>
														<div class="col-md-offset-3 col-md-3 hidden-sm hidden-xs">
															<a href="<?php the_sub_field('carousel_link'); ?>">
																<img class="<?php echo get_sub_field('banner_secondary_image')?'secondary-img':'hidden'; ?>" src="<?php the_sub_field('banner_secondary_image'); ?>">
															</a>
														</div>
													</div>
													<div class="hero-text <?php echo get_sub_field('banner_secondary_image')?'col-md-6':'col-md-12'; ?>">
														<a class="btn btn-<?php the_sub_field('background_pattern'); ?> <?php echo get_sub_field('carousel_link')?'':'hidden'; ?>" value="Contato" href="<?php the_sub_field('carousel_link'); ?>">Saiba Mais</a></p>
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
										<li data-target="#hero-carousel" data-slide-to="<?php echo $count++; ?>" class="<?php echo get_sub_field('initial_case')?'active':''; ?> hidden-sm hidden-xs"></li>
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
				<h1 class="uppercase">Escolha a Área do seu interesse</h1>				
				<?php if( have_rows('areas') ): ?>                        
					<?php while( have_rows('areas') ): the_row(); ?>
						<a href="<?php the_sub_field('link'); ?>">
							<div class="col-md-2">
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
			<div class="col-md-12 no-padding">
				<div class="no-padding">
					<h1 class="uppercase">Os Posts mais recentes</h1>
					<?php echo do_shortcode('[facetwp template="posts"]'); ?>
				</div>
			</div>
			<!--/Feed-->
			<!--Comments-->
			<!--<div class="col-md-4 no-padding">
				<section id="comments">
					<div class="">
						<?php
						if( $comments = $wpdb->get_results(
						"SELECT comment_author, comment_author_url, comment_content,
							comment_ID, comment_post_ID
						FROM $wpdb->comments
						WHERE comment_approved = '1'
						ORDER BY comment_date_gmt DESC LIMIT 4") ) :
						?>
							<ul>
								<?php foreach ($comments as $comment) { ?>
									<a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>" title="on <?php echo $comment->post_title; ?>">
										<li>
											<?php echo get_avatar( $comment, '60' ); ?>
											<?php echo strip_tags($comment->comment_author); ?> disse: <?php echo wp_html_excerpt( $comment->comment_content, 40 ); ?>...
										</li>
									</a>
								<?php }  ?>
							</ul>
						<?php endif; ?>
					</div>
				</section>
			</div>-->
			<!--/Comments-->
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