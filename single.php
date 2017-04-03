<?php get_header(); ?>
<main>
    <section id="banner"></section>
    <section id="article">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 paper">
                    <div class="share">
                        <a href="http://twitter.com/home?status=<?php the_title(); ?> <?php bloginfo('url')?>?p=<?php the_ID(); ?> via @tcomplexidade" title="Postar no Twitter!" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-network/twitter.svg" height="32px"></a>
                        <a href="http://www.facebook.com/sharer.php?u=<?php bloginfo('url')?>?p=<?php the_ID(); ?><?php the_title(); ?>" title="Postar no Facebook" target="blank"><img src="<?php bloginfo('template_url'); ?>/img/social-network/facebook.svg" height="32px"></a>
                    </div>
                    <h1 class="uppercase"><?php the_title(); ?></h1>
                    <h2><?php the_field('subtitle'); ?></h2>
                    <div>
                        <div class="<?php echo get_field('pdf_file')?'download':'hidden'; ?>">
                            <a target="_blank" href="<?php the_field('pdf_file'); ?>"><img class="file-type" src="<?php bloginfo('template_url'); ?>/img/icons/pdf.svg"><p class="btn btn-green">Download</p></a>
                        </div>
                        <p><?php the_field('video'); ?></p>
                        <div class="col-md-12 no-padding">

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

                        </div>
                        <p><?php the_field('content'); ?></p>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-10 comments">
                    <?php comments_template( '', true ); ?>
                </div>
            </div>
        </div>  
    </section>
</main>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.justifiedGallery.min.js"></script>
<script>
	$("#image-gallery").justifiedGallery({
        rowHeight : 200,
        lastRow : 'nojustify',
        margins : 5,
        randomize : false,
    });
</script>
<?php get_footer(); ?>