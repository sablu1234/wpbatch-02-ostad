<?php

class Custom_Recent_Posts_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'custom_recent_posts_widget',
            __('Techub Recent Posts', 'textdomain'),
            ['description' => __('Displays recent posts with options.', 'textdomain')]
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];

        $post_count = !empty($instance['post_count']) ? absint($instance['post_count']) : 3;
        $order = !empty($instance['order']) ? $instance['order'] : 'DESC';
        $orderby = !empty($instance['orderby']) ? $instance['orderby'] : 'date';
        $trim_words = !empty($instance['trim_words']) ? absint($instance['trim_words']) : 10;

        // Query posts
        $recent_posts = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => $post_count,
            'order' => $order,
            'orderby' => $orderby
        ]);

        if ($recent_posts->have_posts()) {
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                $comments_count = get_comments_number();
                $trimmed_title = wp_trim_words(get_the_title(), $trim_words, '...');
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
                            <a href="<?php the_permalink(); ?>"><?php echo esc_html($trimmed_title); ?></a>
                        </h3>
                    </div>
                </div>

                <?php
            }
            wp_reset_postdata();
        }

        echo $args['after_widget'];
    }

    public function form($instance) {
        $post_count = !empty($instance['post_count']) ? $instance['post_count'] : 3;
        $order = !empty($instance['order']) ? $instance['order'] : 'DESC';
        $orderby = !empty($instance['orderby']) ? $instance['orderby'] : 'date';
        $trim_words = !empty($instance['trim_words']) ? $instance['trim_words'] : 10;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('post_count')); ?>">Number of posts:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('post_count')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('post_count')); ?>" type="number"
                   value="<?php echo esc_attr($post_count); ?>" min="1">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('order')); ?>">Order:</label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('order')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('order')); ?>">
                <option value="DESC" <?php selected($order, 'DESC'); ?>>Descending</option>
                <option value="ASC" <?php selected($order, 'ASC'); ?>>Ascending</option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('orderby')); ?>">Order By:</label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('orderby')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('orderby')); ?>">
                <option value="date" <?php selected($orderby, 'date'); ?>>Date</option>
                <option value="title" <?php selected($orderby, 'title'); ?>>Title</option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('trim_words')); ?>">Trim title to (words):</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('trim_words')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('trim_words')); ?>" type="number"
                   value="<?php echo esc_attr($trim_words); ?>" min="1">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        return [
            'post_count' => absint($new_instance['post_count']),
            'order' => in_array($new_instance['order'], ['ASC', 'DESC']) ? $new_instance['order'] : 'DESC',
            'orderby' => in_array($new_instance['orderby'], ['date', 'title']) ? $new_instance['orderby'] : 'date',
            'trim_words' => absint($new_instance['trim_words']),
        ];
    }
}

function register_custom_recent_posts_widget() {
    register_widget('Custom_Recent_Posts_Widget');
}
add_action('widgets_init', 'register_custom_recent_posts_widget');
