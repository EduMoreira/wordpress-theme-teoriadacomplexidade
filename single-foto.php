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
                    <h2 class="uppercase"><?php the_field('subtitle'); ?></h2>
                </div>
            </div>
        </div>
    </section>
    <section id="article">
        <div>       
            <?php
            $images = get_field('gallery');
            if( $images ): ?>
                <div id="image-gallery" class="justifiedGallery">
                    <?php foreach( $images as $image ): ?>
                        <a href="<?php echo $image['url']; ?>" title="<?php echo $image['caption']; ?>" data-rel="lightbox-gallery-1">
                            <img alt="<?php echo $image['caption']; ?>" src="<?php echo $image['url']; ?>"/>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="offset-md-2 col-md-8 paper">
                <div class="share">
                    <a href="http://twitter.com/home?status=<?php the_title(); ?> <?php bloginfo('url')?>?p=<?php the_ID(); ?> via @tcomplexidade" title="Postar no Twitter!" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-network/twitter.svg" height="32px"></a>
                    <a href="http://www.facebook.com/sharer.php?u=<?php bloginfo('url')?>?p=<?php the_ID(); ?><?php the_title(); ?>" title="Postar no Facebook" target="blank"><img src="<?php bloginfo('template_url'); ?>/img/social-network/facebook.svg" height="32px"></a>
                </div>
                <?php the_field('content'); ?>
            </div>
            <div class="offset-md-2 col-md-8 comments">
                <?php comments_template( '', true ); ?>
            </div>
        </div>
    </section>
</main>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.justifiedGallery.min.js"></script>
<?php get_footer(); ?>
<script>
	$("#image-gallery").justifiedGallery({
        rowHeight : 300,
        lastRow : 'nojustify',
        margins : 5,
        randomize : false,
    });
</script>