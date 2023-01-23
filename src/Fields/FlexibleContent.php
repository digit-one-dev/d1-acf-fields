<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseParentField;

/**
 * Flexible Content Field for ACF
 * Check the details and options here: https://www.advancedcustomfields.com/resources/flexible-content/
 * 
 * Note that FlexibleContet uses layouts in contrast to any other Acf BaseParentField which are all using sub_fields.
 * As the internal requirements for layouts and sub_fields are roughly the same (expect for the transformation method)
 * this class uses BaseParentField->$sub_fields under the hood to manage her layouts.
 */
class FlexibleContent extends BaseParentField
{
    protected $prefix;
    protected $name = 'flexible_content';
    protected $type = 'flexible_content';
    protected $label = 'Flexible Content';

    /**
     * Adds the provided layouts 
     * 
     * @param mixed $layouts
     *
     * @return self the updated instance
     */
    public function layouts(mixed $layouts): self
    {
        return $this->sub_fields($layouts);
    }

    /**
     * Sets the layouts
     * 
     * @param mixed $layouts
     */
    public function set_layouts(mixed $layouts)
    {
        $this->set_sub_fields($layouts);
    }

    /**
     * @return mixed
     */
    public function get_layouts(): mixed
    {
        return $this->get_sub_fields();
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
        $built = parent::build($parameter);
        
        $built['layouts'] = $built['sub_fields'];
        unset($built['sub_fields']);

        return $built;
    }

    /**
     * Recursively calls the transform methods of the layouts
     * with their data.
     * 
     * @param mixed data that is returned by ACF get_field() for this field
     * 
     * @return mixed of recursively transformed data
     */
    public function transform(mixed $data): mixed
    {
        return collect($data)
            ->map(function($layout) {
                if (!is_array($layout) || !array_key_exists($layout['acf_fc_layout'], $this->sub_fields)) {
                    return $layout;
                }

                $layout_obj = $this->sub_fields[$layout['acf_fc_layout']];
                return $layout_obj->transform($layout);
            })->toArray();
    }
}
