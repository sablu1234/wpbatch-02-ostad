<?php

class Custom_Recent_Posts_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'custom_recent_posts_widget',
            __('Techub Recent Posts', 'textdomain'),
            ['description' => __('Displays recent posts in a custom layout.', 'textdomain')]
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Query recent posts
        $recent_posts = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3,
        ]);

        if ($recent_posts->have_posts()) {
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                $comments_count = get_comments_number();
                ?>

                <div class="rc__post mb-5 d-flex align-items-center">
                    <div class="rc__post-thumb mr-20">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo esc_url($thumbnail ?: 'assets/img/blog/details-sm-1-1.jpg'); ?>" alt="">
                        </a>
                    </div>
                    <div class="rc__post-content">
                        <div class="rc__meta">
                            <span><i class="fa-thin fa-comments"></i>
                                <?php echo $comments_count . ' Comment' . ($comments_count !== 1 ? 's' : ''); ?>
                            </span>
                        </div>
                        <h3 class="rc__post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                    </div>
                </div>

                <?php
            }
            wp_reset_postdata();
        }

        echo $args['after_widget'];
    }
}

// Register the widget
function register_custom_recent_posts_widget() {
    register_widget('Custom_Recent_Posts_Widget');
}
add_action('widgets_init', 'register_custom_recent_posts_widget');
