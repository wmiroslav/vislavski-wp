<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div style="width: 100%; height: 160px;"></div>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-sm-12">

				<footer class="site-footer row fxd" id="colophon">

					<address class="col-sm-6" style="width:50%;">
						<p>
							<span>EDELINSKI d.o.o.</span></br>
							<span>Narodnog Fronta 23</span></br>
							<span>25233 Ruski Krstur</span></br>
							<span>Vojvodina, Srbija </span>
						</p>
					</address>
					<div class="col-sm-6" style="width:50%;">
						<p>
							<span>tel:</span> <a href="tel:025-703-244">025 / 703 - 244</a> </br>
							<span>fax:</span> <a href="tel:025-704-211">025 / 704 - 211</a> </br>
							<span>mob:</span> <a href="tel:064-297-3481">064 / 297 - 34 - 81</a> </br>
							<a href="mailto:edelinski.doo@gmail.com">edelinski.doo@gmail.com</a>
						</p>
					</div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

