<?php

declare(strict_types=1);

namespace WPP\WPPF;

/**
 * Class Shortcode_Framework
 * 
 * Manages the registration and execution of shortcodes.
 * 
 * @package WPP\WPPF
 * @uses    add_shortcode()
 * @see     https://developer.wordpress.org/reference/functions/add_shortcode/
 * 
 */
class Shortcode_Framework
{
    /**
     * @var array Stores registered shortcodes.
     */
    private $shortcodes = [];

    /**
     * Register a shortcode
     *
     * @param string   $tag      The shortcode tag.
     * @param callable $callback The shortcode callback function.
     * 
     * @return void
     */
    public function registerShortcode(string $tag, callable $callback): void
    {
        $this->shortcodes[$tag] = function ($atts) use ($callback) {
            // Ensure $atts is an array.
            $atts = is_array($atts) ? $atts : [];

            // Invoke the callback function with the modified $atts.
            return $callback($atts);
        };
    }

    /**
     * Initialize the shortcode framework by registering 
     * shortcodes on WordPress initialization.
     *
     * @return void
     */
    public function init(): void
    {
        add_action('init', [$this, 'registerShortcodes']);
    }

    /**
     * Register all the shortcodes with WordPress.
     *
     * @return void
     */
    public function registerShortcodes(): void
    {
        foreach ($this->shortcodes as $tag => $callback) {
            add_shortcode($tag, $callback);
        }
    }
}
