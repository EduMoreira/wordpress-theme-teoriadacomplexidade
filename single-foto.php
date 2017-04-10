<?php get_header(); ?>
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
    <section id="article">
        <div class="container-fluid">       
            <?php
            $images = get_field('gallery');
            if( $images ): ?>
                <div id="image-gallery" class="justifiedGallery">
                    <?php foreach( $images as $image ): ?>
                        <a href="<?php echo $image['url']; ?>" data-rel="lightbox-gallery-1">
                            <img alt="" src="<?php echo $image['url']; ?>"/>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <p><?php the_field('content'); ?></p>
        </div> 
    </section>
</main>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.justifiedGallery.min.js"></script>
<?php get_footer(); ?>
<script>
	$("#image-gallery").justifiedGallery({
        rowHeight : 250,
        lastRow : 'justify',
        margins : 5,
        randomize : false,
    });
</script>