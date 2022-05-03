<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Relation extends BaseField
{
    protected $prefix;
    protected $name = 'relation';
    protected $type = 'relationship';
    protected $label = 'Relation';
    protected $args = [
        'filters'   => [ 'search' ],
        'return_format' => 'id',
    ];
}
