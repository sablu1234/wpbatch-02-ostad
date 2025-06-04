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
class Techub_Services_List extends Widget_Base {

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
		return 'techub-services-list';
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
		return __( 'Services List', 'elementor-hello-world' );
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
			'services_section',
			[
				'label' => esc_html__( 'Services List', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'techub_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		
		$repeater->add_control(
			'techub_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);

		$repeater->add_control(
			'techub_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
			]
		);

		$repeater->add_control(
			'techub_item_url',
			[
				'label' => esc_html__( 'URL', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'textdomain' ),
				'placeholder' => esc_html__( 'Url here', 'textdomain' ),
			]
		);


		$this->add_control(
			'item_list',
			[
				'label' => esc_html__( 'Services Item List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'techub_title' => esc_html__( 'Title #1', 'textdomain' ),
						'techub_description' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					],
					[
						'techub_title' => esc_html__( 'Title #2', 'textdomain' ),
						'techub_description' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					],
				],
				'title_field' => '{{{ techub_title }}}',
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

	
		
		?>




		<section class="tp-service-5-area pt-190 pb-90 p-relative fix">
            <div class="container">
                <div class="row">
                    <div class="tp-section-5-title-wrapper mb-50 text-center wow fadeInUp">
                        <span class="tp-section-5-subtitle">CHECK OUR SERVICES</span>
                        <h3 class="tp-section-5-title">Service we provide our <span>clients</span></h3>
                    </div>
                </div>
                <div class="row">
					<?php foreach( $settings['item_list'] as $item ) : ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="tp-service-5-wrapper mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-service-5-item d-flex">
                                <div class="tp-service-5-thumb">
                                    <img src="<?php echo esc_url($item['techub_image']['url']);?>" alt="">
                                </div>
                                <div class="tp-service-5-content">
                                    <h4 class="tp-service-5-title">
										
										<?php if(!empty($item['techub_item_url'])) :?>
											<a href="<?php echo esc_url($item['techub_item_url']);?>"><?php echo esc_html($item['techub_title']);?></a>
										<?php else: ?>
											<?php echo esc_html($item['techub_title']);?>
										<?php endif; ?>
										
									</h4>
                                    <p class="tp-service-5-paragraph"><?php echo esc_html($item['techub_description']);?></p>
									<?php if(!empty($item['techub_item_url'])) :?>
                                    <div class="tp-service-5-btn">
                                        <a href="<?php echo esc_url($item['techub_item_url']);?>"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php endforeach;?>
                </div>
            </div>
            <div class="tp-service-5-bg-shape">
                <img src="assets/img/service/service-5-bg-shape.png" alt="">
            </div>
        </section>
		

		

		
		<section class="tp-slider-5-area p-relative z-index-1 fix d-none">
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


$widgets_manager->register( new Techub_Services_List() );