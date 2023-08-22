<?php

declare(strict_types=1);

namespace WPP\WPPF\Pages;

use WPP\WPPF\Shortcode_Framework;
use WPP\WPPF\Svg_Framework;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class legalCenter
 *
 * Handles the Legal Center page and associated shortcode.
 *
 * @package WPP\WPPF\Pages
 */
class Legal_Center
{
    /**
     * Initializes and prints the the Legal Center page content via the
     * associated shortcode.
     *
     * @return void
     */
    public static function init(): void
    {
        $shortcode_framework = new Shortcode_Framework();
        $shortcode_framework->registerShortcode('getpage-legal-center', [self::class, 'callback']);
        $shortcode_framework->init();
    }

    /**
     * Callback function for the "get-legal-center" shortcode.
     *
     * @return string The HTML output of the Legal Center page.
     */
    public static function callback(): string
    {
        $svg_framework = new Svg_Framework(
            'Svg_Array_LegalCenter',
            'WPP\WPPF\Helpers',
            'h-10 w-10',
        );
        $all_svgs     = $svg_framework->get_all_svgs();

        $template_args['item_array'] = [
            [
                'title' => __('Terms and Conditions', 'wppf'),
                'svg'   => $all_svgs['terms_and_conditions_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/terms-and-conditions-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Acceptable Use Policy', 'wppf'),
                'svg'   => $all_svgs['acceptable_use_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/acceptable-use-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('End User License Agreement', 'wppf'),
                'svg'   => $all_svgs['eula_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/end-user-license-agreement/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Privacy Policy', 'wppf'),
                'svg'   => $all_svgs['privacy_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/privacy-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Cookie Policy', 'wppf'),
                'svg'   => $all_svgs['cookie_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/cookie-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Refund Policy', 'wppf'),
                'svg'   => $all_svgs['return_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/refund-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Disclaimer Policy', 'wppf'),
                'svg'   => $all_svgs['disclaimer_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/disclaimer-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Accessibility Statement', 'wppf'),
                'svg'   => $all_svgs['accessibility_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/accessibility-statement/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Trademark Policy', 'wppf'),
                'svg'   => $all_svgs['trademark_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/trademark-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Copyright Policy', 'wppf'),
                'svg'   => $all_svgs['copyright_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/copyright-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Image Policy', 'wppf'),
                'svg'   => $all_svgs['image_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/image-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
            [
                'title' => __('Logo Policy', 'wppf'),
                'svg'   => $all_svgs['logo_policy'],
                'link'  => esc_url(path_join(get_site_url(), 'legal-center/logo-and-image-policy/')),
                'row_class' => 'bg-brand-blue-700',
            ],
        ];

        /*
         *
         */
        $policy_count = count($template_args['item_array']);




        error_log(print_r($policy_count, TRUE));
        ob_start();
        echo \WPP\WPPF\Helpers\Get_Template::part([
            'slug' => 'partials/legal-center',
            'name' => 'view',
            'args' => $template_args
        ]);

        return ob_get_clean();
    }
}
