<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-6 col-12 mob-col">
                <p class="text">
                    Die starke Kooperation in der Ausbildung
                    von Verkaufs- und Vertriebsleitern
                </p>
                <div class="logos-wrap">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer-1.png" alt=""></a>
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer-2.png" alt=""></a>
                </div>
                <strong class="strong-text">NUTZEN SIE IHRE CHANCE!</strong>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
				<?php dynamic_sidebar( 'footer_area_one' ); ?>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-12">
				<?php dynamic_sidebar( 'footer_area_two' ); ?>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<?php dynamic_sidebar( 'footer_area_three' ); ?>
            </div>
            <div class="col-12">
                <div class="rights">
                    <div class="text">
                        © <?php bloginfo( 'name' ); ?> <?php echo date( 'Y' ) . '. ' . get_option( 'copyright' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>