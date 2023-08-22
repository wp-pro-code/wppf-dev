<?php

declare(strict_types=1);

namespace WPP\WPPF\Pages;

use WPP\WPPF\Shortcode_Framework;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class Changelog
 *
 * Handles the changelog page and shortcode.
 *
 * @package WPP\WPPF\Pages
 */
class Changelog
{
    /**
     * @var string|null Stores the string value for the site's name with a
     *                  trademark symbol in the Config class.
     */
    private static $name_tm;

    /**
     * Initializes the changelog page and shortcode.
     *
     * @param string|null $name_tm The string value for the site's name with a
     *                             trademark symbol.
     *                             
     * @return void
     */
    public static function init($name_tm): void
    {
        self::$name_tm = $name_tm;

        $shortcode_framework = new Shortcode_Framework();
        $shortcode_framework->registerShortcode('getpage-changelog', [self::class, 'callback']);
        $shortcode_framework->init();
    }

    /**
     * Callback function for the "get-changelog" shortcode.
     *
     * @return string The HTML output of the changelog page.
     */
    public static function callback(): string
    {
        $template_args['name_tm']    = self::$name_tm;
        $template_args['item_array'] = [
            [
                'version' => __('1.0.0', 'wppf'),
                'date'    => __('15 May 2030', 'wppf'),
                'h3'      => __('Initial Launch', 'wppf'),
                'content' => '<p>' . sprintf(__('After two and a half years of talking about it, forklifting lots of code from one project to another, and eight-months of dedicated non-stop coding, %s is ready for criticism.', 'wppf'), self::$name_tm) . '</p>
                    <figure class="max-w-screen-md mx-auto pt-0 text-center">
                        <svg aria-hidden="true" class="w-12 h-12 mx-0 text-brand-blue" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                        </svg>
                        <div class="p-0">
                            <p class="mt-0 mb-1 text-lg italic font-medium text-gray-900">' . __('If you are not embarrassed by the first version of your product, you’ve launched too late.', 'wppf') . '</p>
                        </div>
                        <svg aria-hidden="true" class="w-12 h-12 ml-auto text-brand-blue transform rotate-180" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"></path>
                        </svg>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="w-6 h-6 rounded-full" src="' . wp_get_attachment_url(82) . '" alt="' . __('Portrait of Reid Hooffman, co-founder of LinkedIn.', 'wppf') . '">
                            <div class="flex items-center divide-x-2 divide-gray-500">
                                <cite class="pr-3 text-sm text-gray-900 font-medium italic">' . __('Reid Hoffman', 'wppf') . '</cite>
                                <cite class="pl-3 text-sm text-gray-500 italic">' . __('Co-founder of LinkedIn', 'wppf') . '</cite>
                            </div>
                        </figcaption>
                    </figure>',
            ],
        ];

        ob_start();
        echo \WPP\WPPF\Helpers\Get_Template::part(['slug' => 'partials/changelog', 'name' => 'view', 'args' => $template_args]);
        return ob_get_clean();
    }
}
