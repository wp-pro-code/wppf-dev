<?php

declare(strict_types=1);

namespace WPP\WPPF;

/**
 * Class Enqueue_Assets
 *
 * Enqueues styles and scripts for the child theme.
 *
 * @uses add_action()
 * @uses wp_enqueue_scripts()
 * @uses wp_register_style()
 * @uses wp_register_script()
 * @uses wp_enqueue_style()
 * @uses wp_enqueue_script()
 */
class Enqueue_Assets
{
    /**
     * @var array The assets to be enqueued.
     */
    private array $parameters;

    /**
     * @var string The prefix for asset handles.
     */
    private string $prefix;

    /**
     * @var string The version number of the assets.
     */
    private string $version;

    /**
     * @var string The handle for the Tailwind CSS style.
     */
    private string $handle_tailwind;

    /**
     * @var string The handle for the script to be enqueued in the head.
     */
    private string $handle_script_head;

    /**
     * Enqueue_Assets constructor.
     *
     * Registers and enqueues styles and scripts.
     *
     * @param array $parameters An array containing the parameters used during registration.
     *
     * @uses add_action()
     * @uses wp_enqueue_scripts()
     * @uses wp_footer()
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;

        $this->prefix  = $this->parameters['prefix'];
        $this->version = $this->parameters['version'];

        $this->handle_public_style = $this->prefix . 'script-head';
        $this->handle_script_head  = $this->prefix . 'script-head';
        $this->handle_tailwind     = $this->prefix . 'tailwind';
        $this->handle_script_twe   = $this->prefix . 'tailwind-elements';

        add_action('wp_enqueue_scripts', [$this, 'register_assets']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
        add_action('wp_footer', [$this, 'enqueue_additional_scripts']);
    }

    /**
     * Registers the child theme styles and scripts.
     *
     * @return void
     *
     * @uses wp_register_style()
     * @uses wp_register_script()
     */
    public function register_assets(): void
    {
        // Register styles
        wp_register_style(
            $this->handle_public_style,
            get_stylesheet_directory_uri() . '/assets/css/public.css',
            [],
            $this->version
        );
        wp_register_style(
            $this->handle_tailwind,
            get_stylesheet_directory_uri() . '/assets/css/output.css',
            [],
            $this->version
        );

        // Register scripts
        wp_register_script(
            $this->handle_script_head,
            get_stylesheet_directory_uri() . '/assets/js/public-head.js',
            ['jquery'],
            $this->version,
            true
        );
        wp_register_script(
            $this->handle_script_twe,
            get_stylesheet_directory_uri() . '/node_modules/tw-elements/dist/js/tw-elements.umd.min.js',
            [],
            $this->version,
            true
        );
    }

    /**
     * Enqueues the registered styles and scripts.
     *
     * @return void
     *
     * @uses wp_enqueue_style()
     * @uses wp_enqueue_script()
     */
    public function enqueue_assets(): void
    {
        //wp_enqueue_style($this->handle_public_style);
        wp_enqueue_script($this->handle_script_head);
        wp_enqueue_style($this->handle_tailwind);
        wp_enqueue_script($this->handle_script_twe);
    }

    /**
     * Enqueues additional scripts in the footer.
     *
     * @return void
     */
    public function enqueue_additional_scripts(): void
    {
        echo '<script src="' . get_stylesheet_directory_uri() . '/node_modules/@material-tailwind/html/scripts/ripple.js" id="' . $this->prefix . 'material-tailwind-ripple-js"></script>' . PHP_EOL;
        echo '<script src="' . get_stylesheet_directory_uri() . '/node_modules/@material-tailwind/html/scripts/tabs.js" id="' . $this->prefix . 'material-tailwind-tabs-js"></script>';
        echo '<script src="' . get_stylesheet_directory_uri() . '/node_modules/flowbite/dist/flowbite.min.js" id="' . $this->prefix . 'flowbite-tailwind-js"></script>';
    }
}
