<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class CloneField extends BaseField
{
    protected $prefix;
    protected $type = 'clone';
    protected $name = 'clone';
    protected $label = 'Clone';
    protected $args = [
        'clone' => []
    ];
}
