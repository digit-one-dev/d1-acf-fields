<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\DisplayFormat;
use DigitOne\Acf\OptionTraits\FirstDay;
use DigitOne\Acf\OptionTraits\ReturnFormat;

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

    use ReturnFormat;
    use DisplayFormat;
    use FirstDay;
}
