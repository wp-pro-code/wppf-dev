<?php

declare(strict_types=1);

namespace WPP\WPPF\Pages;

use WPP\WPPF\Shortcode_Framework;
use WPP\WPPF\Svg_Framework;
use WPP\WPPF\Framework_Modal;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class Legal_Policy_Trademark
 *
 * Handles the Trademark legal page and associated shortcode.
 *
 * @package WPP\WPPF\Pages
 */
class Legal_Policy_Trademark
{
    /**
     * @var string|null Stores the string value for the site's name with a
     *                  trademark symbol.
     */
    private static $name_tm;

    /**
     * @var string|null Licensed Application admin meta.
     */
    private static $admin;

    /**
     * @var string|null Legal content strings.
     */
    private static $legal_strings;

    /**
     * Initializes and prints the Trademark legal page
     * content via the associated shortcode.
     *
     * @param string|null $name_tm The string value for the site's name with a
     *                             trademark symbol.
     * @param string|null $admin   Licensed Application admin meta, i.e., legal
     *                             name, app version.
     * @param string|null $legal_strings Legal content strings.
     * 
     * @return void
     */
    public static function init($name_tm, $admin, $legal_strings): void
    {
        self::$name_tm       = $name_tm;
        self::$admin         = $admin;
        self::$legal_strings = $legal_strings;

        $shortcode_framework = new Shortcode_Framework();
        $shortcode_framework->registerShortcode('getpage-legal-trademark-policy', [self::class, 'callback']);
        $shortcode_framework->init();
    }

    /**
     * Callback function for the "get-legal-tci" shortcode.
     *
     * @return string The HTML output of the TCI legal page.
     */
    public static function callback(): string
    {
        $svg_framework = new Svg_Framework('Svg_Array_LegalCenter', 'WPP\WPPF\Helpers', 'h-6 w-6');
        $svg_array     = $svg_framework->get_all_svgs();

        $svg_framework = new Svg_Framework(
            class_name: 'Svg_Array_LegalCenter',
            class_namespace: 'WPP\WPPF\Helpers',
            class_value: 'h-8 w-8',
            width_value: '40',
            height_value: '40'
        );
        $svg_item_logo_policy = $svg_framework->get_svg('trademark_policy');

        $svg_framework = new Svg_Framework(
            class_name: 'Svg_Array_Misc',
            class_namespace: 'WPP\WPPF\Helpers',
            class_value: 'h-7 w-7',
            width_value: '40',
            height_value: '40'
        );
        $svg_item_circle_info = $svg_framework->get_svg('circle_info');

        $menu_args = wp_nav_menu(
            [
                'menu'                 => 4,
                'menu_class'           => 'mt-0 px-0 text-xxs',
                'container'            => 'nav',
                'container_class'      => '',
                'container_id'         => '',
                'container_aria_label' => __('Navagation links to legal policies and documents.', 'wppf'),
                'before'               => '',
                'after'                => '',
                'link_before'          => '',
                'link_after'           => '',
                'fallback_cb'          => false,
                'depth'                => 0,
                'echo'                 => false,
                'walker'               => new \WPP\WPPF\Nav_Walker_Start_EL_Legal_Center(array_values($svg_array)),
            ]
        );

        $framework_modal = new Framework_Modal();
        $form_modal = $framework_modal->init(
            id: 'toc-policy-form',
            classes: 'max-w-3xl',
            title: __('Terms and Conditions Policy Inquiry', 'wppf'),
            content: \FrmFormsController::get_form_shortcode(array('id' => 3)),
            trigger_label: __('form', 'wppf'),
            button_link: false,
        );

        $template_args = [
            'svg_logo_policy' => $svg_item_logo_policy,
            'svg_circle_info' => $svg_item_circle_info,
            'menu'    => $menu_args,
            'form'    => $form_modal,
            'strings' =>
            [
                'name_tm'       => self::$name_tm,
                'section_class' => 'tci-policy',
                'legal'         => self::$legal_strings,
            ],
            'admin'   => self::$admin,
        ];

        ob_start();
        echo \WPP\WPPF\Helpers\Get_Template::part(['slug' => 'partials/legal-policy-trademark', 'name' => 'view', 'args' => $template_args]);
        return ob_get_clean();
    }
}
