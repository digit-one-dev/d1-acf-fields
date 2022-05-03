<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class TimePicker extends BaseField
{
    protected $prefix;
    protected $name = 'time';
    protected $type = 'time_picker';
    protected $label = 'Time';
    protected $args = [
        'display_format' => 'H:i',
        'return_format'  => 'H:i',
    ];
}
