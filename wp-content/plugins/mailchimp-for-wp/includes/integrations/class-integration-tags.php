<?php

/**
 * Class MC4WP_Integration_Tags
 *
 * @ignore
 * @access private
 */
class MC4WP_Integration_Tags extends MC4WP_Dynamic_Content_Tags
{
    /**
     * @var MC4WP_Integration
     */
    protected $integration;

    /**
     * Add hooks
     */
    public function add_hooks()
    {
        add_filter('mc4wp_integration_checkbox_label', [ $this, 'replace_in_checkbox_label' ], 10, 2);
    }

    /**
     * Register template tags for integrations
     */
    public function register()
    {
        parent::register();

        $this->tags['subscriber_count'] = [
            'description' => __('Replaced with the number of subscribers on the selected list(s)', 'mailchimp-for-wp'),
            'callback'    => [ $this, 'get_subscriber_count' ],
        ];
    }

    /**
     * @hooked `mc4wp_integration_checkbox_label`
     * @param string $string
     * @param MC4WP_Integration $integration
     * @return string
     */
    public function replace_in_checkbox_label($string, MC4WP_Integration $integration)
    {
        $this->integration = $integration;
        return $this->replace_in_html($string);
    }

    /**
     * Returns the number of subscribers on the selected lists (for the form context)
     *
     * @return int
     */
    public function get_subscriber_count()
    {
        $mailchimp = new MC4WP_MailChimp();
        $list_ids  = $this->integration->get_lists();
        $count     = $mailchimp->get_subscriber_count($list_ids);
        return number_format($count);
    }
}
