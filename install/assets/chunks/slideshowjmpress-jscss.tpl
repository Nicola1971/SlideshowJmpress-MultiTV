/**
 * slideshowjms-jscss
 *
 * include js and css for SlideshowJmpress multitv
 *
 * @category	chunk
 * @version 	2.0
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@modx_category MultiTV add-ons
 * @internal    @installset base
 * @internal    @overwrite false
 */



<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
		<!-- jmpress plugin -->
		<script type="text/javascript" src="/assets/templates/common/js/slideshowjms/js/jmpress.min.js"></script>
		<!-- jmslideshow plugin : extends the jmpress plugin -->
		<script type="text/javascript" src="/assets/templates/common/js/slideshowjms/js/jquery.jmslideshow.js"></script>
		<script type="text/javascript" src="/assets/templates/common/js/slideshowjms/js/modernizr.custom.48780.js"></script>
		<noscript>
			<style>
			.step {
				width: 100%;
				position: relative;
			}
			.step:not(.active) {
				opacity: 1;
				filter: alpha(opacity=99);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
			}
			.step:not(.active) a.jms-link{
				opacity: 1;
				margin-top: 40px;
			}
			</style>
		</noscript>

		<script type="text/javascript">
             (function($) {

				$( '#jms-slideshow' ).jmslideshow();

		 })(jQuery);
		</script>