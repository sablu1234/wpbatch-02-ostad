<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

$post_cats = get_the_terms(get_the_ID(), 'product_cat');

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>
	<div class="product__details-sku product__details-more">
            <p><?php esc_html_e( 'SKU:', 'woocommerce' ); ?></p>
            <span><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span>
	</div>
	<?php endif; ?>

	<div class="product__details-categories product__details-more">
            <p><?php echo esc_html(_n( 'Category:', 'Categories:', count( $post_cats ), 'woocommerce' )); ?></p>

			<?php 
					$html = '';
					foreach($post_cats as $key => $cat) {

					$html .= '<span><a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a></span>,';

					}
					echo rtrim($html,','); 

			?>

        </div>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
