<?php
// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$plugin                 = 'wpboutik/wpboutik.php';
$is_plugin_installed    = \WPS\WPS_Child_Theme_Generator\Pub::is_plugin_installed( $plugin );
if ( ! $is_plugin_installed ) {
	$classes = 'install-now';
	$action_url    = wp_nonce_url( add_query_arg(
		array(
			'action' => 'install-plugin',
			'plugin' => 'wpboutik',
		),
		network_admin_url( 'update.php' )
	), 'install-plugin_wpboutik' );
	$button = __( 'Install WPBoutik', 'wps-child-theme-generator' );
} else {
	$action_url  = wp_nonce_url( add_query_arg(
		array(
			'action'        => 'activate',
			'plugin'        => $plugin,
			'plugin_status' => 'all',
			'paged'         => 1
		),
		network_admin_url( 'plugins.php' )
	), 'activate-plugin_' . $plugin );

	$button = __( 'Enable WPBoutik', 'wps-child-theme-generator' );
}

$details_url = add_query_arg(
	array(
		'tab'       => 'plugin-information',
		'plugin'    => 'wpboutik',
		'TB_iframe' => true,
		'width'     => 722,
		'height'    => 949,
	),
	network_admin_url( 'plugin-install.php' )
); ?>
<style>
   .pub-wp-serveur.plugin-card.plugin-card-wpboutik {
        background:url(<?php echo WPS_CHILD_THEME_GENERATOR_URL .'assets/img/bg_pub.png'; ?>) no-repeat center bottom #3c54cc;
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        -ms-grid-row-align: center;
        align-items: center;
        float: none;
        width: auto;
        padding: 5px 5px 5px 0;
        border: 0 none;
        box-shadow: none;
        color: #FFF;
        margin: 0 0 5px 0;
    }
.pub-wp-serveur .logo {
            padding: 0px 20px;
        }

        .pub-wp-serveur > .message {
            width: 100%;
            padding: 0px 10px;
            font-size: 26px;
            text-align:center;
        }

        .pub-wp-serveur .cta {
            padding: 0px 0px;
        }

        .btn-install-plugin.activate-now,
        .btn-pubwps {
            display: block;
            background: #fff;
            width: 100%;
            padding: 8px 20px;
            white-space: nowrap;
            margin-bottom: 4px;
            text-decoration: none;
            text-align: center;
            font-weight: 500;
            border-radius: 4px;
            line-height: 18px;
            height: unset;
            text-shadow: none;
            box-sizing: border-box;
        }
        .plugin-card-bv-migration-to-wpserveur .notice-dismiss:before {
            color: #ffffff;
            font: 400 26px/26px dashicons;
        }
        .btn-wps-details {
            color: #fff;
            box-sizing: border-box;
        }

        .btn-abonner {
            background: #3c54cc;
            color: #fff;
            border: 1px solid;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        .btn-abonner:focus,
        .btn-abonner:hover {
            color: #fff;
            background: black;
            box-shadow: none !important;
        }
        .btn-pubwps.btn-install-plugin.activate-now.button-primary,
        .btn-pubwps.btn-install-plugin.activate-now.button-primary:focus,
        .btn-install-plugin.activate-now,
        .btn-install-plugin {
            background: #26a0d2;
            color: #fff;
            position: relative;
            border:none;
            box-shadow:none;
        }
        .btn-pubwps.btn-install-plugin.install-now:focus,
        .btn-install-plugin.activate-now:hover,
        .btn-install-plugin:hover {
            color: #26a0d2;
            background: #fff;
            border:none;
            box-shadow:none;
        }

        .btn-wps-details {
            text-align: center;
            width: 100%;
            display: block;
            white-space: nowrap;
            padding: 0 20px;
        }

        a.btn-wps-details:focus {
            color: #fff !important;
            box-shadow: none !important;
        }
        a.btn-pubwps.btn-install-plugin.install-now.updated-message.installed.button-disabled:before {
            font: normal 20px/1 'dashicons';
            position: absolute;
            left: 10px;
            top:7px;
        }
        .btn-install-plugin.updating-message:before {
            font: normal 20px/1 'dashicons';
            position: absolute;
            left: 10px;
            top: 7px;
        }

        @media screen and (max-width: 860px) {
            .pub-wp-serveur,
            .pub-wp-serveur .logo,
            .pub-wp-serveur .message,
            .pub-wp-serveur .cta {
                display: block !important;
                padding: 5px 10px;
            }

            .btn-pubwps {
                width: unset;
            }

            .pub-wp-serveur .message,
            .pub-wp-serveur .logo {
                text-align: center;
            }

            .pub-wp-serveur .cta {
                margin-bottom: 20px;
            }
        }
</style>

<?php
$textes = array(
	__( 'Say goodbye to complications! WPBoutik simplifies online sales with WordPress.', 'wps-child-theme-generator' ),
	__( 'Lightness and efficiency: discover the WPBoutik e-commerce plugin for WordPress.', 'wps-child-theme-generator' ),
	__( 'Transform your WordPress site into a seamless sales platform with WPBoutik.', 'wps-child-theme-generator' ),
	__( 'Maximum simplicity, optimal results: adopt WPBoutik for your WordPress e-commerce.', 'wps-child-theme-generator' ),
	__( 'Your online store deserves the best: choose WPBoutik for a hassle-free experience.', 'wps-child-theme-generator' ),
	__( 'Ditch the bulky plugins! WPBoutik gives you the simplicity you need to sell online on WordPress.', 'wps-child-theme-generator' ),
	__( 'WPBoutik: the lightweight and efficient solution for your WordPress e-commerce', 'wps-child-theme-generator' ),
	__( 'Save time and energy with WPBoutik: the obvious choice for a stress-free online store.', 'wps-child-theme-generator' ),
	__( 'Online sales without complications? It\'s possible with WPBoutik on WordPress.', 'wps-child-theme-generator' ),
	__( 'Your online store deserves a simple and effective solution: discover WPBoutik today.', 'wps-child-theme-generator' ),
);
$index = rand(0, count($textes) - 1);
?>

<div class="pub-wp-serveur plugin-card plugin-card-wpboutik">
	<div class="message">
        <strong><?php echo $textes[$index]; ?></strong>
        </div>
	<div class="cta">
		<a href="https://wpboutik.com/?campaign=wpschildthemegenerator&tracker=pubwpswpb" target="_blank" class="btn-pubwps btn-abonner"><?php _e( 'Discover WPBoutik', 'wps-child-theme-generator' ); ?></a>
		<a href="<?php echo $details_url; ?>" class="thickbox open-plugin-details-modal btn-wps-details"><?php _e( 'More about WPBoutik', 'wps-child-theme-generator' ); ?></a>
	</div>
</div>