<?php
/*
Template Name: Contato
*/
?>
<?php get_header(); ?>
<main>
    <section id="banner">
        <div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
			<div class="content--wrapper">
				<div class="content center">
					<?php the_title( '<h1 class="uppercase">', '</h1>' ); ?>
				</div>
			</div>
		</div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="uppercase">Acesse também</h3>
                    <a href="https://fractalrealityacademy.com.br" target="_black">fractalrealityacademy.com.br</a><br>
                    <a href="http://juliotorres.ws" target="_black">juliotorres.ws</a>
                </div>
                <div class="col-md-3">
                    <h3 class="uppercase">Dúvidas ou sugestões?</h3>
                    <p>Envie-as agora mesmo para fractalrealityacademy@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <h3 class="uppercase">Se preferir, envie sua messagem atráves do formulário:</h3>
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contato"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();	?>