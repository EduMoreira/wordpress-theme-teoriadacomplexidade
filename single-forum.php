<?php get_header(); ?>
<head>
    <meta name="description" content="<?php the_field('descript'); ?>">
    <title><?php the_title(); ?></title>
</head>
<main>
    <section id="banner">
        <div class="background">
            <div class="content--wrapper">
                <div class="content">
                    <h1 class="uppercase"><?php the_title(); ?></h1>
                    <h2><?php the_field('subtitle'); ?></h2>
                </div>
            </div>
        </div>
    </section>
    <section id="banner" class="article">
    </section>
    <section id="article">
        <div class="container">
            <div class="row">
                <div class="col-md-6 paper">
                    <div>
                        <h3><?php the_field('descript'); ?></h3>
                        <div class="<?php echo get_field('pdf_file')?'download':'hidden'; ?>">
                            <a target="_blank" href="<?php the_field('pdf_file'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/icons/pdf.svg"><h1>Download</h1></a>
                        </div>
                        <p><?php the_field('video'); ?></p>
                        <div class="col-md-12 no-padding">
                            <?php if( have_rows('image_gallery') ): ?>
                                <?php $count = 0 ?>
                                <?php while( have_rows('image_gallery') ): the_row(); ?>
                                    <a title="<?php the_sub_field('image_description'); ?>" href="<?php the_sub_field('image'); ?>" alt"<?php the_sub_field('image_description'); ?>" data-rel="lightbox-gallery-1">
                                        <div class="background col-md-4" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <p><?php the_field('content'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 comments">
                    <section>
                        <?php comments_template( '', true ); ?>
                    </section>
                </div>                
            </div>
        </div>  
    </section>
</main>
<?php get_footer(); ?>