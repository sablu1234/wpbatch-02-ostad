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
class Techub_Porfolio_Filter_Post extends Widget_Base {

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
		return 'techub-portfolio-post';
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
		return __( 'Portfolio Filter', 'elementor-hello-world' );
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
			'blog_post_section',
			[
				'label' => esc_html__( 'Portfolio Filter Post', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'post_per_page',
			[
				'label' => esc_html__( 'Post Prt Page', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 3,
			]
		);

		$this->add_control(
			'post_cat_list',
			[
				'label' => esc_html__( 'Category Include', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'options' => post_cat('portfolio-cat'),
				'label_block' => true,
				'multiple' => true,
			]
		);

		$this->add_control(
			'post_cat_exclude',
			[
				'label' => esc_html__( 'Category Exclude', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'options' => post_cat('portfolio-cat'),
				'label_block' => true,
				'multiple' => true,
			]
		);

		$this->add_control(
			'post_in',
			[
				'label' => esc_html__( 'Post Include', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'options' => get_all_post(),
				'label_block' => true,
				'multiple' => true,
			]
		);

		$this->add_control(
			'post_not_in',
			[
				'label' => esc_html__( 'Post Exclude', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'options' => get_all_post(),
				'label_block' => true,
				'multiple' => true,
			]
		);

		$this->add_control(
			'post_order',
			[
				'label' => esc_html__( 'Order', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'asc',
				'options' => [
					'asc' => esc_html__( 'ASC', 'textdomain' ),
					'desc' => esc_html__( 'DESC', 'textdomain' ),
				],
				
			]
		);

		$this->add_control(
			'post_orderby',
			[
				'label' => esc_html__( 'Order by', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'date',
				'options' => [
					'ID' => 'Post ID',
					'author' => 'Post Author',
					'title' => 'Title',
					'date' => 'Date',
					'modified' => 'Last Modified Date',
					'parent' => 'Parent Id',
					'rand' => 'Random',
					'comment_count' => 'Comment Count',
					'menu_order' => 'Menu Order',
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

		// button 01
		if ( ! empty( $settings['button_text'] ) ) {
			$this->add_link_attributes( 'button_arg', $settings['button_link'] );
			$this->add_render_attribute('button_arg','class','tp-btn');
		}


		$args = array(
			'post_type' => 'portfolio',
			'posts_per_page' => $settings['post_per_page'],
			'orderby' => $settings['post_orderby'],
			'order' => $settings['post_order'],
			'post__in' => $settings['post_in'],
			'post__not_in' => $settings['post_not_in'],
		);

		if(!empty($settings['post_cat_list'] )){
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'portfolio-cat',
					'field' => 'slug',
					'terms' => $settings['post_cat_exclude'] ? $settings['post_cat_exclude'] : $settings['post_cat_list'],
					'operator' => $settings['post_cat_exclude'] ? 'NOT IN' : 'IN',
				),
			);
		}


		$query = new \WP_Query( $args );
		
		?>



        <section class="tp-portfolio-area pt-120 pb-90">
            <div class="container">
				<div class="portfolio-filter-button masonary-menu d-flex">
					<button data-filter="*">show all</button>
					<?php foreach($settings['post_cat_list'] as $item ) : 

						?>
					<button data-filter=".<?php echo $item; ?>"><?php echo post_cat('portfolio-cat')[$item] ;?></button>
					<?php endforeach; ?>
				</div>
                <div class="row grid">
					<?php if ( $query->have_posts() ) : while( $query->have_posts()  ) : $query->the_post(); 
					$categories = get_the_terms(get_the_ID(),'portfolio-cat');
					?>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item <?php echo techub_get_cat_data($categories,' ','slug'); ?>">
                        <div class="tp-project-3-slide-wrapper mb-30">
                            <div class="tp-project-3-thumb tp-project-3-thumb-inner p-relative">
                               <?php the_post_thumbnail(); ?>
                                <div class="tp-project-3-down-content text-center">
                                    <span><?php echo techub_get_cat_data($categories,',','name'); ?></span>
                                    <h4 class="tp-project-3-down-title"><a href="><?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php endwhile; endif; ?>
                </div>
            </div>
        </section>

		<?php
	}


}


$widgets_manager->register( new Techub_Porfolio_Filter_Post() );