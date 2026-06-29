<?php
/**
 * View for rendering the Post No Results block.
 *
 * @since x.x.x
 * @package Spectra\Blocks\PostNoResults
 */

use SpectraBlocks\Helpers\HtmlSanitizer;
?>
<div <?php echo wp_kses_data( $wrapper_attributes ); ?>>
	<?php HtmlSanitizer::render( $content ); ?>
</div>
