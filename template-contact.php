<?php
/*
Template Name: Contato
*/
?>
<?php get_header(); ?>
<main>
    <section id="banner"></section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <?php echo do_shortcode('[contact-form-7 id="4" title="Contato"]'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer();	?>