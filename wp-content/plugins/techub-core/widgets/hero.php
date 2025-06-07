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
class Techub_Hero extends Widget_Base {

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
		return 'techub-hero';
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
		return __( 'Hero', 'elementor-hello-world' );
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
			'hero_section',
			[
				'label' => esc_html__( 'Title and Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'techub_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Subtitle title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your sub title here', 'textdomain' ),
			]
		);
		$this->add_control(
			'techub_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'techub_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
				
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'techub_image_section',
			[
				'label' => esc_html__( 'Image', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'techub_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'techub_bg_image',
			[
				'label' => esc_html__( 'Background Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

		
		$this->start_controls_section(
			'button_section',
			[
				'label' => esc_html__( 'Button 01', 'textdomain' ),
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



		$this->start_controls_section(
			'button_2_section',
			[
				'label' => esc_html__( 'Button 02', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'button_2_text',
			[
				'label' => esc_html__( 'Button Text 2', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Button Text', 'textdomain' ),
				'placeholder' => esc_html__( 'Button text here', 'textdomain' ),
			]
		);

		$this->add_control(
			'button_2_link',
			[
				'label' => esc_html__( 'Link 2', 'textdomain' ),
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
		// button 02
		if ( ! empty( $settings['button_2_text'] ) ) {
			$this->add_link_attributes( 'button_2_arg', $settings['button_2_link'] );
			$this->add_render_attribute('button_2_arg','class','tp-btn tp-btn-white');
		}
		
		?>
		

		

		
		<section class="tp-slider-5-area p-relative z-index-1 fix">
            <div class="tp-slider-5-height">
			<?php if(!empty($settings['techub_bg_image'])) : ?>
                <div class="tp-slider-5-bg" style="background-image: url(<?php echo esc_url($settings['techub_bg_image']['url'])?>);"></div>
				<?php endif;?>
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-6 col-lg-6">
                            <div class="tp-slider-5-content p-relative z-index-11">
                                <div class="tp-slider-5-title-box mb-50 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
									<?php if(!empty($settings['techub_sub_title'])) : ?>
                                    <span class="tp-slider-sub-title tp-slider-sub-title-5"><?php echo techub_kses($settings['techub_sub_title'])?></span>
									<?php endif;?>

									<?php if(!empty($settings['techub_title'])) : ?>
                                    <h1 class="tp-slider-title tp-slider-title-5"><?php echo techub_kses($settings['techub_title'])?>
                                    </h1>
									<?php endif;?>
									
									<?php if(!empty($settings['techub_description'])) : ?>
                                    <p class="tp-slider-5-paragraph"><?php echo esc_html($settings['techub_description'])?></p>
									<?php endif;?>

                                </div>
                                <div class="tp-slider-5-btn-box d-inline-flex wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">

								<?php if(!empty($settings['button_text'])) : ?>
									<a <?php echo $this->get_render_attribute_string( 'button_arg' ); ?>><span><?php echo esc_html($settings['button_text'])?></span></a>
								<?php endif;?>

								<?php if(!empty($settings['button_2_text'])) : ?>
                                    <a <?php echo $this->get_render_attribute_string( 'button_2_arg' ); ?>><span><?php echo esc_html($settings['button_2_text'])?></span></a>
								<?php endif;?>

                                </div>
                            </div>
                        </div>
						<?php if(!empty($settings['techub_image'])) : ?>
                        <div class="col-xl-6 col-lg-6">
                            <div class="tp-slider-5-thumb p-relative z-index-1">
                                <img class="tp-slider-5-main-img" src="<?php echo esc_url($settings['techub_image']['url'])?>" alt="">
                            </div>
                        </div>
						<?php endif;?>
                    </div>
                </div>
            </div>
            <div class="tp-slider-5-bg-shape">
                <img class="tp-slider-5-bg-shape1" src="<?php echo get_template_directory_uri();?>/assets/img/slider/shape/slider-5-shape2.png" alt="">
            </div>
        </section>



		<?php
	}


}


$widgets_manager->register( new Techub_Hero() );