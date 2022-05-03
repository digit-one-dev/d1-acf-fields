<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class PostObject extends BaseField
{
    protected $prefix;
    protected $name = 'post_object';
    protected $type = 'post_object';
    protected $label = 'Beitrag';
    protected $args = [
        'filters'   => [ 'search' ],
        'return_format' => 'id',
    ];
}
