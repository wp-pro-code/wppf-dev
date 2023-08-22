<?php

declare(strict_types=1);

namespace WPP\WPPF;

/**
 * Class SVG_Support
 *
 * Add SVG support to the WordPress editor.
 */
class SVG_Support
{
    /**
     * SVG_Support constructor.
     */
    public function __construct()
    {
        add_filter('wp_kses_allowed_html', [$this, 'allow_svg_attributes']);
    }

    /**
     * Add SVG support to the WordPress editor.
     *
     * @param array $tags Array of allowed HTML tags and attributes.
     *
     * @return array Modified array of allowed HTML tags and attributes.
     */
    public function allow_svg_attributes($tags)
    {
        $tags['svg'] = [
            'xmlns'               => true,
            'xml'                 => true,
            'class'               => true,
            'width'               => true,
            'height'              => true,
            'preserveaspectratio' => true,
            'fill'                => true,
            'viewbox'             => true,
            'role'                => true,
            'aria-hidden'         => true,
            'focusable'           => true,
            'style'               => true,
            'stroke'              => true,
            'stroke-width'        => true,
            'stroke-linecap'      => true,
            'stroke-linejoin'     => true,
        ];
        $tags['path'] = [
            'd'               => true,
            'fill'            => true,
            'stroke-linecap'  => true,
            'stroke-linejoin' => true,
        ];
        $tags['g'] = [
            'clip-path' => true
        ];
        $tags['linearGradient'] = [
            'id'            => true,
            'x1'            => true,
            'x2'            => true,
            'y1'            => true,
            'y2'            => true,
            'gradientunits' => true,
        ];
        $tags['clipPath'] = [
            'id' => true,
        ];
        $tags['stop'] = [
            'stop-color' => true,
            'offset'     => true
        ];

        return $tags;
    }
}
