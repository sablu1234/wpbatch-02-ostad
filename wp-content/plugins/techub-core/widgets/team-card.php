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
class Techub_Team_Card extends Widget_Base {

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
		return 'techub-team-card';
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
		return __( 'Team Card', 'elementor-hello-world' );
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
			'hero_section',
			[
				'label' => esc_html__( 'Team Info', 'textdomain' ),
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
			'techub_url',
			[
				'label' => esc_html__( 'URL', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( '#', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your url here', 'textdomain' ),
				
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
			'item_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tp-el-bg' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'item_bg_hover_color',
			[
				'label' => esc_html__( 'BG Hover Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tp-el-bg:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'social_section',
			[
				'label' => esc_html__( 'Social List', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'item_icon',
			[
				'label' => esc_html__( 'Social Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-smile',
					'library' => 'fa-solid',
				],
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
				'label' => esc_html__( 'Social Item List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
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
		 <div class="tp-project-3-slide-wrapper mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
			<div class="tp-project-3-thumb tp-project-3-thumb-inner p-relative">
				<img src="<?php echo esc_url($settings['techub_image']['url'])?>" alt="">
				<div class="tp-project-3-down-content text-center">
					<span><?php echo techub_kses($settings['techub_sub_title'])?></span>
					<h4 class="tp-project-3-down-title"><a href="<?php echo esc_url($settings['techub_url'])?>"><?php echo techub_kses($settings['techub_title'])?></a></h4>
				</div>
			</div>
		</div>
		
		<?php else: ?>



		<div class="tp-team-wrapper p-relative wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
			<div class="tp-team-thumb item1 tp-el-bg">
				<a href="<?php echo esc_url($settings['techub_url'])?>"><img src="<?php echo esc_url($settings['techub_image']['url'])?>" alt=""></a>
				<div class="tp-team-thumb-shape">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-img-shape.png" alt="">
				</div>
			</div>
			<div class="tp-team-social p-relative">
				<span class="tp-team-icon"></span>

				<?php foreach( $settings['item_list'] as $key=>$item ) : ?>

				<a href="<?php echo esc_url($item['techub_item_url']);?>"><?php \Elementor\Icons_Manager::render_icon( $item['item_icon'], [ 'aria-hidden' => 'true' ] ); ?></i></a>

				<?php endforeach;?>
			</div>
			<div class="tp-team-content text-center">
				<h4 class="tp-team-heading"><a href="<?php echo esc_url($settings['techub_url'])?>"><?php echo techub_kses($settings['techub_title'])?></a></h4>
				<p class="tp-team-parag"><?php echo techub_kses($settings['techub_sub_title'])?></p>
			</div>
		</div>

		<?php endif; ?>

		<?php
	}


}


$widgets_manager->register( new Techub_Team_Card() );