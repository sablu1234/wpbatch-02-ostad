<?php
/*
Plugin Name: Custom Category Widget
Description: Custom widget to display categories with custom markup, links, post counts, and arrow icon.
Version: 1.0
Author: Your Name
*/

class Custom_Category_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'custom_category_widget',
            __('Custom Category List', 'textdomain'),
            ['description' => __('Displays categories using custom HTML markup with dynamic count.', 'textdomain')]
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];

        $count = !empty($instance['count']) ? absint($instance['count']) : 5;
        $current_cat_id = get_queried_object_id();

        $categories = get_categories([
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => true,
            'number'     => $count,
        ]);

        if (!empty($categories)) {
            echo '<div class="sidebar__widget-content"><ul>';

            foreach ($categories as $category) {
                $category_link = get_category_link($category->term_id);
                $category_name = esc_html($category->name);
                $is_active = ($category->term_id == $current_cat_id) ? ' class="active"' : '';

                echo '<li' . $is_active . '>
                        <a href="' . esc_url($category_link) . '">' .
                            $category_name .
                            ' (' . $category->count . ')<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span>
                        </a>
                      </li>';
            }

            echo '</ul></div>';
        }

        echo $args['after_widget'];
    }

    public function form($instance) {
        $count = !empty($instance['count']) ? $instance['count'] : 5;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('count')); ?>">
                <?php _e('Number of categories to show:', 'textdomain'); ?>
            </label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('count')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('count')); ?>" type="number"
                   value="<?php echo esc_attr($count); ?>" min="1" max="50" />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = [];
        $instance['count'] = (!empty($new_instance['count'])) ? absint($new_instance['count']) : 5;
        return $instance;
    }
}

function register_custom_category_widget() {
    register_widget('Custom_Category_Widget');
}
add_action('widgets_init', 'register_custom_category_widget');
