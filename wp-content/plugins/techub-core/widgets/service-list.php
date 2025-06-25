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
			'item_title_color',
			[
				'label' => esc_html__( 'Text Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tp-el-title' => 'color: {{VALUE}}',
				],
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


		$this->start_controls_section(
			'column_num',
			[
				'label' => esc_html__( 'Select Column', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'xl_column',
			[
				'label' => esc_html__( 'Column Desktop', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '6',
				'options' => [
					'' => esc_html__( 'Default', 'textdomain' ),
					'12' => esc_html__( '1 Column', 'textdomain' ),
					'6' => esc_html__( '2 Column', 'textdomain' ),
					'4' => esc_html__( '3 Column', 'textdomain' ),
				],
				
			]
		);

		$this->add_control(
			'lg_column',
			[
				'label' => esc_html__( 'Column Large', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '6',
				'options' => [
					'' => esc_html__( 'Default', 'textdomain' ),
					'12' => esc_html__( '1 Column', 'textdomain' ),
					'6' => esc_html__( '2 Column', 'textdomain' ),
					'4' => esc_html__( '3 Column', 'textdomain' ),
				],
				
			]
		);

		$this->add_control(
			'md_column',
			[
				'label' => esc_html__( 'Column Medium', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '6',
				'options' => [
					'' => esc_html__( 'Default', 'textdomain' ),
					'12' => esc_html__( '1 Column', 'textdomain' ),
					'6' => esc_html__( '2 Column', 'textdomain' ),
					'4' => esc_html__( '3 Column', 'textdomain' ),
				],
				
			]
		);

		$this->add_control(
			'xs_column',
			[
				'label' => esc_html__( 'Column Mobile', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '12',
				'options' => [
					'' => esc_html__( 'Default', 'textdomain' ),
					'12' => esc_html__( '1 Column', 'textdomain' ),
					'6' => esc_html__( '2 Column', 'textdomain' ),
					'4' => esc_html__( '3 Column', 'textdomain' ),
				],
				
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




		<section class="tp-service-5-area p-relative fix">
            <div class="container">
                <div class="row">
                </div>
                <div class="row">
					<?php foreach( $settings['item_list'] as $item ) : ?>
                    <div class="col-xl-<?php echo esc_attr($settings['xl_column']); ?> col-lg-<?php echo esc_attr($settings['lg_column']); ?> col-md-<?php echo esc_attr($settings['md_column']); ?> col-<?php echo esc_attr($settings['xs_column']); ?>">
                        <div class="tp-service-5-wrapper elementor-repeater-item-<?php echo esc_attr( $item['_id'] );?> mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-service-5-item d-flex">
                                <div class="tp-service-5-thumb">
                                    <img src="<?php echo esc_url($item['techub_image']['url']);?>" alt="">
                                </div>
                                <div class="tp-service-5-content">
                                    <h4 class="tp-service-5-title tp-el-title">
										
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



		<?php
	}


}


$widgets_manager->register( new Techub_Services_List() );