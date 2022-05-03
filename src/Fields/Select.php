<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Select extends BaseField
{
    protected $prefix;
    protected $name = 'select';
    protected $type = 'select';
    protected $label = 'Auswahl';
    protected $args = [
        'choices'   => [],
    ];
}
