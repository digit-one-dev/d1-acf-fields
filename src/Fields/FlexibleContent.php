<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

/**
 * Flexible Content Field for ACF
 * Check the details and options here: https://www.advancedcustomfields.com/resources/flexible-content/
 */
class FlexibleContent extends BaseField
{
    protected $prefix;
    protected $name = 'flexible_content';
    protected $type = 'flexible_content';
    protected $label = 'Flexible Content';

    private $layouts = [];


    /**
     * @param mixed $layouts
     *
     * @return self the updated instance
     */
    public function layouts(mixed $layouts): self
    {
        $this->set_layouts(array_merge($this->layouts, $layouts));

        return $this;
    }

    /**
     * @param mixed $layouts
     */
    public function set_layouts(mixed $layouts)
    {
        $this->layouts = $layouts;
    }

    /**
     * @return mixed
     */
    public function get_layouts(): mixed
    {
        return $this->layouts;
    }

    /**
     * Builds the array for ACF registration. 
     *
     * @param array $parameter to be added to the registration (deprecated)
     *
     * @return array for ACF registration
     */
    public function build(array $parameter = []): array
    {
        if (!$this->layouts) {
            return parent::build($parameter);
        }

        return parent::build(array_merge($parameter, [
            'layouts' => $this->build_layouts()
        ]));
    }

    /**
     * Recursively builds the layouts of this field.
     * 
     * @return array of acf registration data
     */
    private function build_layouts(): array
    {
        if (!$this->layouts) {
            return [];
        }

        return collect($this->layouts)
            ->map(function($layout) {
                return $layout->build();
            })->toArray();
    }
}
