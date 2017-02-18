<?php
/*
Template Name: Alerta
*/
?>
<?php get_header(); ?>
<main>
    <section id="banner"></section>
    <!--Alert-->
    <section id="alert">
        <div class="container-fluid">
            <div class="content--wrapper">
                <div class="content">
                    <h1><?php the_field('title_alert'); ?></h1>
                    <p><?php the_field('alert'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!--/Alert-->
</main>
<?php get_footer();	?>