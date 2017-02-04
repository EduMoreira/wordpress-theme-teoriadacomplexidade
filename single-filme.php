<?php get_header(); ?>
<head>
    <meta name="description" content="<?php the_field('descript'); ?>">
    <title><?php the_title(); ?></title>
</head>
<main>
    <section id="banner"></section>
    <section id="banner" class="article">
    </section>
    <section id="article">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 paper">
                    <div>
                        <h1 class="uppercase">
                            <?php the_title(); ?>
                            <div class="share">
                                <a href="http://twitter.com/home?status=<?php the_title(); ?> <?php bloginfo('url')?>?p=<?php the_ID(); ?> via @tcomplexidade" title="Postar no Twitter!" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-network/twitter.svg" height="32px"></a>
                                <a href="http://www.facebook.com/sharer.php?u=<?php bloginfo('url')?>?p=<?php the_ID(); ?><?php the_title(); ?>" title="Postar no Facebook" target="blank"><img src="<?php bloginfo('template_url'); ?>/img/social-network/facebook.svg" height="32px"></a>
                            </div>
                        </h1>
                        <h2><?php the_field('subtitle'); ?></h2>
                        <img class="img-responsive" src="<?php the_field('cover'); ?>" alt="<?php the_title(); ?>">
                        <p><?php the_field('content'); ?></p>
                        <a class="btn btn-blue" href="<?php the_field('link'); ?>" target="_blank">Assistir</a>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-10 comments">
                    <?php comments_template( '', true ); ?>
                </div>                
            </div>
        </div>  
    </section>
</main>
<?php get_footer(); ?>