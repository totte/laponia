<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Laponia
 */
?>
	    </div>
	    <hr>
            <footer>
                <p>Copyright 2013 H W "totte" Tovetjärn</p>
                <?php do_action( 'laponia_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'laponia' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'laponia' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'laponia' ), 'Laponia', '<a href="http://tott.es" rel="designer">totte</a>' ); ?>
            </footer>
        </div> <!-- /.container-narrow -->
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
    </body>
</html>