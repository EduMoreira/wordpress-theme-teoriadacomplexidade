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
    <section id="banner" class="article">
    </section>
    <section id="article">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 paper">
                    <!--<div>                 
                        <a href="<?php the_field('link'); ?>" target="_blank">
                            <img class="img-responsive" src="<?php the_field('cover'); ?>" alt="<?php the_title(); ?>">
                            <spam class="btn btn-green">Mais</spam>
                        </a>  
                    </div>-->
                    <div class="download">
                        <a target="_blank" href="<?php the_field('link'); ?>">
                            <img class="file-type img-responsive" src="<?php the_field('cover'); ?>">
                            <spam class="btn btn-green">Mais</spam>
                        </a>
                    </div>
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
        </div>  
    </section>
</main>
<?php get_footer(); ?>