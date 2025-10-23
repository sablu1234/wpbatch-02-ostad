<?php

    // get all category 
    function post_cat($category = 'category'){
        $categories = get_categories( array(
            'taxonomy' => $category,
            'orderby' => 'name',
            'order'   => 'ASC',
        ) );
        $cat_list = [];
        foreach($categories as $cat){
            $cat_list[$cat->slug] = $cat->name;
        }
        return $cat_list;
    }
    
    // get all post 
    function get_all_post($post_type_name = 'post'){
        $posts = get_posts( array(
            'post_type' => $post_type_name,
            'orderby' => 'name',
            'order'   => 'ASC'
        ) );
        $posts_list = [];
        foreach($posts as $post){
            $posts_list[$post->ID] = $post->post_title;
        }
        return $posts_list;
    }

    function techub_get_cat_data($categories = [], $delimeter = ' ',$term = 'slug'){
        $slugs = [];
        foreach($categories as $cat){
            if($term == 'slug'){
                array_push($slugs, $cat->slug);
            }
            if($term == 'name'){
                $slugs[] = $cat->name;
            }
        }
        return implode($delimeter, $slugs);
    }



    // Trait function here
    trait TPElements_Common{
        protected function common_section($ctrl_id = null, $ctrl_name = 'New Heading'){
            $this->start_controls_section(
			'hero_'.$ctrl_id.'_section',
			[
				'label' => esc_html__( $ctrl_name, 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'techub_'.$ctrl_id.'_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Subtitle title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your sub title here', 'textdomain' ),
			]
		);
		$this->add_control(
			'techub_'.$ctrl_id.'_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);

		$this->add_control(
			'techub_'.$ctrl_id.'_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
			]
		);


			$this->add_control(
			'text_align',
			[
				'label' => esc_html__( 'Alignment', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'textdomain' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'textdomain' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'textdomain' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .tp-el-align' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
        }
    }