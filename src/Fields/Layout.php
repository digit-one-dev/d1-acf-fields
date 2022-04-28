<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseParentField;

class Layout extends BaseParentField
{
    protected $prefix;
    protected $name = 'layout';
    protected $label = 'Layout';
    protected $type = 'layout';
    protected $args = [
        'display' => 'block',
    ];
}
