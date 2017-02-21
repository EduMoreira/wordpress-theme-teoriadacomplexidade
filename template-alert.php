<?php
/*
Template Name: Alerta
*/
?>
<?php get_header(); ?>
<main>
    <!--Alert-->
    <section id="alert">
        <div class="container-fluid">
            <div class="content--wrapper">
                <div class="content">
                    <h1><?php the_field('title_alert'); ?></h1>
                    <h2><?php the_field('alert'); ?></h2>
                    <div class="col-md-offset-3 col-md-6">
                        <a class="btn btn-red" value="Contato" href="/contato">Contato</a>
                        <a class="btn btn-green" value="Início" href="/">Início</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Alert-->
</main>
<?php get_footer();	?>