<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package elodie
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div id="retouraccueil">
				<span><a class="pageload-link" href="/www.elodiemartins.com/web/Autour_dElodie_Martins"><i class="fa fa-angle-double-left"></i> Autour d'Elodie Martins</a></span>
			</div>
<div id="blocsociaux">
                    <ul id="reseauxsociaux">
                        <li><a target="_blank" title="Elodie Le Meilleur Patissier M6 Officiel" class="facebook" href="https://www.facebook.com/pages/Elodie-Le-Meilleur-Patissier-M6-Officiel/447895505247225?fref=ts">Facebook</a></li>
                        <li><a target="_blank" title="Elodie Le Meilleur Patissier M6 Officiel twitter" class="twitter" href="https://twitter.com/ElodieM6">Twitter</a></li>
                        <li><a target="_blank" title="Elodie Le Meilleur Patissier M6 Officiel instagram" class="instagram" href="http://instagram.com/elodiem6">instagram</a></li>
                    </ul>
                    <span>Me contacter</span>
                </div>
	
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/elodie/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/elodie/js/jquery.masonry.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		var $container = $('#container');
		$('#container').masonry({
			columnWidth: 320,
			itemSelector: '.item',
			isFitWidth: true,
			isAnimated: !Modernizr.csstransitions
		}).imagesLoaded(function() {
			$(this).masonry('reload');
		});
	});


	
</script>

</body>
</html>
