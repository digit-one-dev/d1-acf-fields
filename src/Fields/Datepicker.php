<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Datepicker extends BaseField
{
    protected $prefix;
    protected $name = 'date';
    protected $type = 'date_picker';
    protected $label = 'Date';
    protected $args = [
        'display_format' => 'd.m.Y',
        'return_format'  => 'd.m.Y',
        'first_day'      => 1,
    ];
}
