<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 10.1.0
 *
 * @var bool   $readonly If the input should be set to readonly mode.
 * @var string $type     The input type attribute.
 */

defined( 'ABSPATH' ) || exit;

/* translators: %s: Quantity. */
$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );

?>
<div class="quantity">
	<?php
	/**
	 * Hook to output something before the quantity input field.
	 *
	 * @since 7.2.0
	 */
	do_action( 'woocommerce_before_quantity_input_field' );
	?>
	<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $label ); ?></label>
	<div class="product__details-quantity mb-0">
		<div class="tp-product-quantity mt-10 mb-10">
			<span class="tp-cart-minus">
				<svg width="14" height="2" viewBox="0 0 14 2" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 1H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>                                                             
			</span>
				<input
					type="text"
					<?php echo $readonly ? 'readonly="readonly"' : ''; ?>
					id="<?php echo esc_attr( $input_id ); ?>"
					class="<?php echo esc_attr( join( ' tp-cart-input ', (array) $classes ) ); ?>"
					name="<?php echo esc_attr( $input_name ); ?>"
					value="<?php echo esc_attr( $input_value ); ?>"
					aria-label="<?php esc_attr_e( 'Product quantity', 'woocommerce' ); ?>"
					<?php if ( in_array( $type, array( 'text', 'search', 'tel', 'url', 'email', 'password' ), true ) ) : ?>
						size="4"
					<?php endif; ?>
					min="<?php echo esc_attr( $min_value ); ?>"
					<?php if ( 0 < $max_value ) : ?>
						max="<?php echo esc_attr( $max_value ); ?>"
					<?php endif; ?>
					<?php if ( ! $readonly ) : ?>
						step="<?php echo esc_attr( $step ); ?>"
						placeholder="<?php echo esc_attr( $placeholder ); ?>"
						inputmode="<?php echo esc_attr( $inputmode ); ?>"
						autocomplete="<?php echo esc_attr( isset( $autocomplete ) ? $autocomplete : 'on' ); ?>"
					<?php endif; ?>
				/>
			<span class="tp-cart-plus">
				<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1.21924 7H13.3836" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.30176 13V1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</span>
		</div>
	</div>
	<?php
	/**
	 * Hook to output something after quantity input field
	 *
	 * @since 3.6.0
	 */
	do_action( 'woocommerce_after_quantity_input_field' );
	?>
</div>
<?php
