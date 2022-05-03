<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Taxonomy extends BaseField
{
    protected $prefix;
    protected $name = 'taxonomy';
    protected $label = 'Taxonomie';
    protected $type = 'taxonomy';
    protected $args = [
        'taxonomy'    => 'category',
        'field_type'  => 'checkbox',
        'add_term'    => 0,
    ];
}
