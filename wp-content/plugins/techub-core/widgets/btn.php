<?php
namespace Techub_Core\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Techub_BTN extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'techub-btn';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Techub Button', 'elementor-hello-world' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-accordion';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'techub-cat-widget' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'elementor-hello-world' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function register_controls() {

		$this->register_controls_section();
		$this->style_tab_content();

	}

	// style register control section
	protected function register_controls_section(){
		$this->start_controls_section(
			'button_section',
			[
				'label' => esc_html__( 'Button', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'button_text',
			[
				'label' => esc_html__( 'Button Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Button Text', 'textdomain' ),
				'placeholder' => esc_html__( 'Button text here', 'textdomain' ),
			]
		);

		$this->add_control(
			'button_link',
			[
				'label' => esc_html__( 'Link', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->end_controls_section();

	}
	
	// style tabs control section
	protected function style_tab_content(){
		$this->start_controls_section(
			'techub_style_section',
			[
				'label' => esc_html__( 'Style', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .el-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'text_color_2',
			[
				'label' => esc_html__( 'Title Text Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .el-title-2' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'text_color_des',
			[
				'label' => esc_html__( 'Des Text Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .el-desc' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}
		







	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		// button 01
		if ( ! empty( $settings['button_text'] ) ) {
			$this->add_link_attributes( 'button_arg', $settings['button_link'] );
			$this->add_render_attribute('button_arg','class','tp-btn');
		}
		?>

		<?php if(!empty($settings['button_text'])) : ?>
		<div class="techub-btn">
			<a <?php echo $this->get_render_attribute_string( 'button_arg' ); ?>><span><?php echo esc_html($settings['button_text'])?></span></a>
		</div>
		<?php endif;?>



		
		<?php
	}


}


$widgets_manager->register( new Techub_BTN() );