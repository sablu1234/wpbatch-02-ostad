<?php
// Check if comments are allowed
if (comments_open()) :
    ?>
    <div id="comments" class="comments-area">
        <?php
        // Display the comments list
        if (have_comments()) :
            ?>
            <h2 class="postbox__comment-title">
                <?php
                $comment_count = get_comments_number();
                echo esc_html($comment_count) . ' ' . _n('Comment', 'Comments', $comment_count, 'harry');
                ?>
            </h2>

            <ul class="postbox__comment mb-95">
                <?php
                wp_list_comments(array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'callback' => 'custom_comment_list'
                ));
                ?>
            </ul>

            <?php
            // Display comment pagination if needed
            the_comments_pagination(array(
                'prev_text' => esc_html__('Previous', 'harry'),
                'next_text' => esc_html__('Next', 'harry'),
            ));
        endif;
        
        if ( is_user_logged_in() ) {
            $cl = 'loginformuser';
        } else {
            $cl = '';
        }

        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');

        $fields = array(
            'author' => '<div class="row"><div class="col-md-6"><div  class="tp-postbox-contact-input"><input type="text" name="author" id="author" placeholder="' . esc_attr__('Your Name*', 'harry') . '" value="' . esc_attr($commenter['comment_author']) . '" ' . ($req ? 'required' : '') . '></div>
         </div>',
            'email' => '<div class="col-md-6"><div class="tp-postbox-contact-input">
               <input type="email" name="email" id="email" placeholder="' . esc_attr__('Your E-mail', 'harry') . '" value="' . esc_attr($commenter['comment_author_email']) . '" ' . ($req ? 'required' : '') . '>
            </div>
         </div>',
            'url' => '<div class="col-md-12">
            <div class="tp-postbox-contact-input">
               <input type="text" name="url" id="url" placeholder="' . esc_attr__('Website', 'harry') . '" value="' . esc_attr($commenter['comment_author_url']) . '">
            </div>
         </div></div>',
        );


        $defaults = [
            'fields'             => $fields,
            'comment_field' => '<div class="col-md-12 ' . $cl . '">
                    <div class="tp-postbox-contact-input">
                       <textarea id="comment" name="comment" placeholder="' . esc_attr__('Your Comment Here...', 'harry') . '" required></textarea>
                    </div>
                </div>
            ',
            'submit_button' => '<div class="col-md-12">
                                    <div class="tp-postbox-contact-input-btn">
                                       <button type="submit" class="tp-btn"><span>' . esc_html__('Submit Comment', 'harry') . '</span></button>
                                    </div>
                                </div>',

        ];
        // Display the comment form
        comment_form($defaults);
        ?>
    </div><!-- .comments-area -->
<?php endif; ?>


<?php
// Move the comment textarea to the bottom
function move_comment_textarea_to_bottom($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    return $fields;
}

add_action('comment_form_fields', 'move_comment_textarea_to_bottom');
// comments for end 


// custom_comment_list
function custom_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;

    if ($comment->comment_type == 'pingback' || $comment->comment_type == 'trackback') {
        // Display pingbacks and trackbacks differently if needed
        ?>
        <li class="pingback">
            <p><?php esc_html_e('Pingback:', 'harry'); ?> <?php comment_author_link(); ?></p>
        </li>
        <?php
    } else {
        // Display regular comments
        ?>
        <li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
                <div class="tp-postbox-comment-box border-mr p-relative">
                    <div class="tp-postbox-comment-box-inner d-flex">
                        <div class="tp-postbox-comment-avater">
                        <?php echo get_avatar($comment, 155); ?>
                        </div>
                        <div class="tp-postbox-comment-content">
                            <div class="tp-postbox-comment-author ">
                                <span class="post-meta"> <?php comment_date(); ?></span>
                                <h5 class="tp-postbox-comment-name"><?php comment_author(); ?></h5>
                            </div>
                            <?php if ($comment->comment_approved == '0') : ?>
                                <p><?php esc_html_e('Your comment is awaiting moderation.', 'harry'); ?></p>
                            <?php endif; ?>
                            <?php comment_text(); ?>
                            <div class="tp-postbox-comment-reply"><i class="fa-light fa-reply"></i> <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div>
                        </div>
                    </div>
                </div>

              

        <?php
    }
}