<?php
/**
 * Plugin Name:  ACF Layout Control
 * Plugin URI:
 * Description:  Adds Open/Close-all-Layouts Buttons to page admin
 * Version:      0.1.0
 * Author:       Vince Hehlen
 * Author URI:   https://github.com/cyberfly999
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  acf-lc-ayout-control
 * Domain Path:  /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

function vh_acf_layout_control() {
	?>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {

			var $buttons = $('<div class="jan_button_bar" style="margin-bottom: 20px;margin-top:-25px;text-align: right"><button class="acf-button button-secondary button acf-layout-control-expand">Module öffnen</button> <button class="acf-button button-secondary button acf-layout-control-colapse">Module schliessen</button></div>');
			var $target = $('.acf-flexible-content');

			$target.prepend($buttons);

			$('.acf-layout-control-colapse').on('click', function (e) {
				e.preventDefault();
				$('.layout').not('.clones .layout').addClass('-collapsed');
			});

			$('.acf-layout-control-expand').on('click', function (e) {
				e.preventDefault();
				$('.layout').not('.clones .layout').removeClass('-collapsed');
			});

		});
	</script>
	<?php
}
add_action('admin_footer', 'vh_acf_layout_control');


