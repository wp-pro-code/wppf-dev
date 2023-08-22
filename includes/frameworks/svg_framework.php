<?php

declare(strict_types=1);

namespace WPP\WPPF;

/**
 * Class Svg_Framework
 *
 * A framework for generating SVG images.
 */
class Svg_Framework
{
    /**
     * @var array<string, string> $svgs The SVG images.
     */
    private array $svgs;

    /**
     * Svg_Framework constructor.
     *
     * @param string      $class_name      The class name that contains the SVG array.
     * @param string      $class_namespace The namespace of the class.
     * @param string|null $class_value     The value for the class attribute.
     * @param string|null $fill_value      The value for the fill attribute.
     * @param string|null $width_value     The value for the width attribute.
     * @param string|null $height_value    The value for the height attribute.
     */
    public function __construct(
        string $class_name,
        string $class_namespace,
        ?string $class_value  = null,
        ?string $fill_value   = null,
        ?string $width_value  = null,
        ?string $height_value = null,
    ) {
        $this->load_svgs($class_name, $class_namespace);
        $this->replace_attributes($class_value, $fill_value, $width_value, $height_value);
    }

    /**
     * Load the SVG array from the SVG class.
     *
     * @param string $class_name      The class name that contains the SVG array.
     * @param string $class_namespace The namespace of the class.
     * 
     * @throws \RuntimeException If the SVG class does not exist.
     * 
     * @return void
     */
    private function load_svgs(string $class_name, string $class_namespace): void
    {
        $class_path = $class_namespace . '\\' . $class_name;
        if (!class_exists($class_path)) {
            throw new \RuntimeException('SVG class does not exist.');
        }

        $this->svgs = $class_path::$svgs;
    }

    /**
     * Replace class, fill, width, and height attributes in SVGs if values are provided.
     *
     * @param string|null $class_value  The value for the class attribute.
     * @param string|null $fill_value   The value for the fill attribute.
     * @param string|null $width_value  The value for the width attribute.
     * @param string|null $height_value The value for the height attribute.
     * 
     * @return void
     */
    private function replace_attributes(?string $class_value, ?string $fill_value, ?string $width_value, ?string $height_value): void
    {
        foreach ($this->svgs as &$svg) {
            if ($class_value !== null) {
                if (preg_match('/class="[^"]*"/', $svg)) {
                    $svg = preg_replace('/class="([^"]*)"/', 'class="$1 ' . $class_value . '"', $svg);
                } else {
                    $svg = str_replace('<svg', '<svg class="' . $class_value . '"', $svg);
                }
            }

            if ($fill_value !== null) {
                $svg = preg_replace('/fill="[^"]*"/', 'fill="' . $fill_value . '"', $svg);
            }

            if ($width_value !== null) {
                $svg = preg_replace('/width="[^"]*"/', 'width="' . $width_value . '"', $svg);
            }

            if ($height_value !== null) {
                $svg = preg_replace('/height="[^"]*"/', 'height="' . $height_value . '"', $svg);
            }
        }
    }

    /**
     * Get all SVG images.
     *
     * @return array<string, string> The array of SVG images.
     */
    public function get_all_svgs(): array
    {
        return $this->svgs;
    }

    /**
     * Get a single SVG image by name.
     *
     * @param string $name The name of the SVG image.
     * 
     * @return string|null The SVG image or null if not found.
     */
    public function get_svg(string $name): ?string
    {
        return $this->svgs[$name] ?? null;
    }

    /**
     * Get selected SVG images by names.
     *
     * @param array<int, string> $names The names of the SVG images.
     * 
     * @return array<string, string> The array of selected SVG images.
     */
    public function get_selected_svgs(array $names): array
    {
        $selectedSvgs = [];

        foreach ($names as $name) {
            if (isset($this->svgs[$name])) {
                $selectedSvgs[$name] = $this->svgs[$name];
            }
        }

        return $selectedSvgs;
    }
}
