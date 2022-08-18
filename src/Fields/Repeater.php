<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseParentField;

class Repeater extends BaseParentField
{
    protected $prefix;
    protected $name = 'repeater';
    protected $type = 'repeater';
    protected $label = 'Wiederholung';
    protected $args = [
        'button_label' => 'hinzufügen',
    ];

    /**
     * Recursively calls the transform methods of the sub_fields
     * with their data.
     * 
     * @param mixed data that is returned by ACF get_field() for this field
     * 
     * @return mixed of recursively transformed data
     */
    public function transform(mixed $data): mixed
    {
        return collect($data)
            ->map(function($repeater_element) {
                return collect($repeater_element)
                    ->mapWithKeys(function($value, $key) {
                        if (!array_key_exists($key, $this->sub_fields)) {
                            return [$key => $value];
                        }
        
                        $sub_field = $this->sub_fields[$key];
                        return [ $key => $sub_field->transform($value)];
                    })->toArray();
            })->toArray();
    }
}
