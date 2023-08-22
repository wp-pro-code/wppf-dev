<?php

declare(strict_types=1);

namespace WPP\WPPF;

class Nav_Walker_Start_EL extends \Walker_Nav_Menu
{
    /**
     * Counter variable to keep track of menu item indices.
     *
     * @var int
     */
    private static $counter = 0;

    /**
     * Array containing SVG data.
     *
     * @var array
     */
    private $svg_array;

    /**
     * Nav_Walker_Start_EL constructor.
     *
     * @param array $svg_array Array containing SVG data.
     */
    public function __construct($svg_array)
    {
        $this->svg_array = $svg_array;
    }

    /**
     * Start the element output.
     *
     * @param string       $output            Passed by reference. Used to append additional content.
     * @param object       $data_object       The current menu item.
     * @param int          $depth             Depth of the current menu item. Default is 0.
     * @param object|array $args              An array of arguments. Default is an empty array.
     * @param int          $current_object_id Current menu item ID. Default is 0.
     * 
     * @return void
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0): void
    {
        error_log(print_r($args, TRUE));

        $indent = ($depth > 0 ? str_repeat("\t", $depth) : '');

        $classes   = empty($data_object->classes) ? [] : (array) $data_object->classes;
        $classes[] = 'menu-item-' . $data_object->ID;
        $classes[] = 'item-index-' . self::$counter;

        $class_string = implode(' ', $classes);

        $class_string = trim($class_string);

        $output .= $indent . '<li class="' . $class_string . '">';

        $svg  = '<div class="grid gap-2" style="grid-template-columns: auto 1fr">';
        $svg .= '<div class="flex items-center justify-center">';
        $svg .= $this->svg_array[self::$counter];
        $svg .= '</div>';


        $attributes = '';
        if (!empty($data_object->title)) {
            $attributes .= ' title="' . esc_attr($data_object->title) . '"';
        }
        if (!empty($data_object->target)) {
            $attributes .= ' target="' . esc_attr($data_object->target) . '"';
        }
        if (!empty($data_object->xfn)) {
            $attributes .= ' rel="' . esc_attr($data_object->xfn) . '"';
        }
        if (!empty($data_object->url)) {
            $attributes .= ' href="' . esc_attr($data_object->url) . '"';
        }

        $item_output  = $args->before;
        $item_output .= $svg;
        $item_output .= $args->link_before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= apply_filters('the_title', $data_object->title, $data_object->ID);
        $item_output .= '</a></div>';
        $item_output .= $args->link_after;
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $data_object, $depth, $args);

        self::$counter++;
    }
}
