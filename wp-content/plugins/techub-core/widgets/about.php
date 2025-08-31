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
class Techub_About extends Widget_Base {

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
		return 'techub-about';
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
		return __( 'About', 'elementor-hello-world' );
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
			'quote_section',
			[
				'label' => esc_html__( 'Quote and Video', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'techub_sig_image',
			[
				'label' => esc_html__( 'Signature Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'video_url',
			[
				'label' => esc_html__( 'URL', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'https://www.youtube.com/watch?v=PO_fBTkoznc', 'textdomain' ),
				'placeholder' => esc_html__( 'Video URL here', 'textdomain' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'quote_description',
			[
				'label' => esc_html__( 'Quote Content', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'Quote description', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your Quote here', 'textdomain' ),
				
			]
		);

		$this->add_control(
			'author_name',
			[
				'label' => esc_html__( 'Author Name', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Author Name Here', 'textdomain' ),
				'placeholder' => esc_html__( 'Author Name Here', 'textdomain' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'author_designation',
			[
				'label' => esc_html__( 'Author Designation', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Author Designation', 'textdomain' ),
				'placeholder' => esc_html__( 'Author Designation Here', 'textdomain' ),
				'label_block' => true,
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
			'about_list_section',
			[
				'label' => esc_html__( 'About List', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'icon_select',
			[
				'label' => esc_html__( 'Select Icon Type', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icon' => esc_html__( 'Icon', 'textdomain' ),
					'image' => esc_html__( 'Image', 'textdomain' ),
					'svg' => esc_html__( 'SVG', 'textdomain' ),
				],
				
			]
		);

		
		$repeater->add_control(
			'item_icon',
			[
				'label' => esc_html__( 'Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-smile',
					'library' => 'fa-solid',
				],
				'condition' => [
				'icon_select' => 'icon',
				],
			]
		);

		$repeater->add_control(
			'item_image',
			[
				'label' => esc_html__( 'Icon Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
				'icon_select' => 'image',
				],
			]
		);

		$repeater->add_control(
			'item_svg',
			[
				'label' => esc_html__( 'SVG Code', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'SVG Icon Code here', 'textdomain' ),
				'condition' => [
				'icon_select' => 'svg',
				],
			]
		);

		
		$repeater->add_control(
			'item_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
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
						'item_title' => esc_html__( 'Title #1', 'textdomain' ),
					],
					[
						'item_title' => esc_html__( 'Title #2', 'textdomain' ),
					],
				],
				'title_field' => '{{{ item_title }}}',
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






		<section class="tp-about-5-area pt-100 pb-120 p-relative fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="tp-about-5-thumb p-relative wow fadeInLeft">
                            <img src="<?php echo esc_url($settings['techub_bg_image']['url'])?>" alt="">
                            <div class="tp-about-5-thumb-shape">
                                <img class="tp-about-5-thumb-s1" src="<?php echo get_template_directory_uri();?>assets/img/about/service-5-img-shape1.png" alt="">
                                <img class="tp-about-5-thumb-s2" src="<?php echo get_template_directory_uri();?>assets/img/about/service-5-img-shape2.png" alt="">
                                <img class="tp-about-5-thumb-s3" src="<?php echo get_template_directory_uri();?>assets/img/about/service-5-img-shape3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="tp-about-wrapper mt-25 ml-20 wow fadeInRight">
                            <div class="tp-section-title-wrapper mb-40">
                                <span class="tp-section-subtitle"><?php echo techub_kses($settings['techub_sub_title'])?></span>
                                <h3 class="tp-section-5-title"><?php echo techub_kses($settings['techub_title'])?></span></h3>
                                <p><?php echo esc_html($settings['techub_description'])?></p>
                            </div>
                            <div class="tp-about-top-item d-flex mb-40">
                                <div class="tp-about-video-btn">
                                    <a class="popup-video" href="<?php echo esc_url($settings['video_url'])?>"><img src="<?php echo esc_url($settings['video_bg_image']['url'])?>" alt=""><i class="fa-sharp fa-solid fa-play"></i></a>
                                </div>
                                <div class="tp-about-inner-content">
                                    <div class="tp-about-inner-parag">
                                        <p><?php echo techub_kses($settings['quote_description'])?></p>
                                    </div>
                                    <div class="tp-about-inner-heading d-flex">
                                        <h3><?php echo techub_kses($settings['author_name'])?></h3>
                                        <span><?php echo techub_kses($settings['author_designation'])?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-about-feature-box d-flex mb-50">
								<?php foreach( $settings['item_list'] as $key=>$item ) : 
									$key_class=$key==1 ? 'ml-100 tp-about-fi-margin' : '';
									?>
                                <div class="tp-about-feature-item d-flex <?php echo esc_html($key_class);?>">
                                    <div class="tp-about-feature-icon">
                                        <span>
											<?php if( $item['icon_select'] == 'icon') : ?>
											<?php \Elementor\Icons_Manager::render_icon( $item['item_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											<?php elseif( $item['icon_select'] == 'image') : ?>
												<img src="<?php echo esc_url($item['item_image']['url'])?>" alt="">
											<?php else : ?>
												<?php echo ($item['item_svg'])?>
											<?php endif; ?>
										</span>
                                    </div>
                                    <div class="tp-about-feature-content">
                                        <h4><?php echo techub_kses($item['item_title']);?></h4>
                                    </div>
                                </div>
								<?php endforeach;?>

                            </div>
                            <div class="tp-about-signacer-btn d-flex">

							<?php if(!empty($settings['button_text'])) : ?>
									<a <?php echo $this->get_render_attribute_string( 'button_arg' ); ?>><span><?php echo esc_html($settings['button_text'])?></span></a>
								<?php endif;?>
					
                                <div class="tp-about-signaser-img">
                                    <img src="<?php echo esc_url($settings['techub_sig_image']['url'])?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-about-5-bg-shape">
                <img src="<?php echo get_template_directory_uri();?>assets/img/about/about-5-bg-shape.png" alt="">
            </div>
        </section>



		

		

		
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


$widgets_manager->register( new Techub_About() );