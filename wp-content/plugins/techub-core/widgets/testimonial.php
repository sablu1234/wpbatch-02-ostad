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
class Techub_Testimonial extends Widget_Base {

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
		return 'techub-testimonial';
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
		return __( 'Testimonial', 'elementor-hello-world' );
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
			'design_section',
			[
				'label' => esc_html__( 'Layout Style', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'design_style',
			[
				'label' => esc_html__( 'Choose Layout', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'layout-1',
				'options' => [
					'layout-1' => esc_html__( 'Style 01', 'textdomain' ),
					'layout-2' => esc_html__( 'Style 02', 'textdomain' ),
				],
				
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'faq_section',
			[
				'label' => esc_html__( 'Testimonial Tab', 'textdomain' ),
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
			'techub_designation',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Ceo of Goole', 'textdomain' ),
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

		$this->add_control(
			'item_list',
			[
				'label' => esc_html__( 'Testimonial Item List', 'textdomain' ),
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


		<?php if($settings['design_style'] == 'layout-2') : ?>

		<div class="tp-testimonial-inner-slider tp-testimonial-inner-ab-slider p-relative z-index-11 wow fadeInUp">
			<img class="tp-testimonial-inner-shape1" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testi-inner-shape1.png" alt="">
			<img class="tp-testimonial-inner-shape2" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testi-inner-shape2.png" alt="">
			<div class="tp-testimonial-inner-active swiper-container">
				<div class="swiper-wrapper">
					<?php foreach( $settings['item_list'] as $key => $item ) : ?>
					<div class="tp-testimonial-inner-item text-center swiper-slide">
						<div class="tp-testimonial-inner-img mb-35">
							<img src="<?php echo esc_url($item['techub_image']['url']);?>" alt="">
						</div>
						<div class="tp-testimonial-inner-paragraph">
							<p><?php echo esc_html($item['techub_description']);?></p>
						</div>
						<div class="tp-testimonial-inner-bio">
							<h4><?php echo esc_html($item['techub_title']);?></h4>
							<p><?php echo esc_html($item['techub_designation']);?></p>
						</div>
					</div>
					<?php endforeach;?>
				</div>
			</div>
			<div class="tp-testimonial-inner-arrow-box">
				<button class="slider-prev" tabindex="0" aria-label="Previous slide">
					<i class="fa-regular fa-arrow-left"></i>
				</button>
				<button class="slider-next" tabindex="0" aria-label="Next slide">
					<i class="fa-regular fa-arrow-right"></i>
				</button>
			</div>
		</div>

		<?php else: ?>

		<div class="tp-testimonial-insu-tab-wrapper mt-20">
			<div class="row">
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12">
					<div class="tp-testimonial-content wow fadeInUp">
						<div class="tp-testimonial-tab-wrapper  tab-content" id="v-pills-tabContent2">
							<?php foreach( $settings['item_list'] as $key => $item ) : 
									$show = $key == 0 ? 'show active' : '';
							?>
							<div class="tab-pane fade <?php echo esc_attr($show); ?>" id="v-pills-man1-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="v-pills-man1-tab-<?php echo esc_attr($key); ?>">
								<div class="tp-client-review p-relative">
									<div class="tp-client-caption">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testi-star.png" alt="">
										<p><?php echo esc_html($item['techub_description']);?></p>
									</div>
									<div class="tp-client-inner d-flex">
										<div class="tp-client-image">
											<img src="<?php echo esc_url($item['techub_image']['url']);?>" alt="client">
										</div>
										<div class="tp-client-nav-info">
											<h5 class="tp-client-nav-title"><?php echo esc_html($item['techub_title']);?></h5>
											<span class="tp-client-nav-designation"><?php echo esc_html($item['techub_designation']);?></span>
										</div>
									</div>
									<div class="tp-testimonial-box-shape">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testi-box-shape.png" alt="">
									</div>
								</div>
							</div>
							<?php endforeach;?>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
					<div class="nav tp-testimonial-list wow fadeInRight" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
										<?php foreach( $settings['item_list'] as $key => $item ) : 
						$active = $key == 0 ? 'active' : '';
					?>
					<button class="tp-testimonial-btn tp-testimonial-item d-flex nav-link <?php echo esc_attr($active); ?>" id="v-pills-man1-tab-<?php echo esc_attr($key); ?>" data-bs-toggle="pill" data-bs-target="#v-pills-man1-<?php echo esc_attr($key); ?>" type="button" role="tab" aria-controls="v-pills-man1-<?php echo esc_attr($key); ?>" aria-selected="true">
						<span class="tp-testimonial-tab-btn">
							<img src="<?php echo esc_url($item['techub_image']['url']);?>" alt="client">
						</span>
					</button>
					<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>



		<?php
	}


}


$widgets_manager->register( new Techub_Testimonial() );