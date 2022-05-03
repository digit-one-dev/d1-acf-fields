<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

/**
 * Checkbox Field for ACF
 * Check the details and options here: https://www.advancedcustomfields.com/resources/checkbox/
 */
class Checkbox extends BaseField
{
    protected $prefix;
    protected $name = 'checkbox';
    protected $type = 'checkbox';
    protected $label = 'Checkbox';
    protected $args = [
        'choices' => [],
        'allow_custom' => 0,
        'save_custom' => 0,
        'layout' => 'vertical',
        'return_format' => 'value',
    ];
}
