<?php

declare(strict_types=1);

namespace WPP\WPPF\Helpers;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class GetTemplate
 *
 * Helper class for getting template parts.
 *
 * @package WPP\WPPF\Helpers
 */
class Get_Template
{
    /**
     * Retrieve a template part.
     *
     * @param array $parts Array of template part details.
     *                     - 'slug' (string) The slug of the template.
     *                     - 'name' (string) The name of the template.
     *                     - 'args' (array) Optional. Arguments to pass to the template.
     *
     * @return string|null The rendered template part content, or null if parts are missing.
     *
     * @link https://developer.wordpress.org/reference/functions/get_template_part/
     */
    public static function part(array $parts = []): ?string
    {
        if (empty($parts) || empty($parts['slug']) || empty($parts['name'])) {
            return _e('Get_Template::part() faild', 'wppf');
        }

        if (empty($parts['args'])) {
            $parts['args'] = [];
        }

        ob_start();
        get_template_part($parts['slug'], $parts['name'], $parts['args']);
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
}
