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
    protected $args = [
        'layouts' => [],
    ];
}
