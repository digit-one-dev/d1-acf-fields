<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\DisplayFormat;
use DigitOne\Acf\OptionTraits\FirstDay;
use DigitOne\Acf\OptionTraits\ReturnFormat;

class DateTimePicker extends BaseField
{
    protected $prefix;
    protected $name = 'datetime';
    protected $type = 'date_time_picker';
    protected $label = 'Date and Time';
    protected $args = [
        'display_format' => 'd.m.Y H:i',
        'return_format'  => 'd.m.Y H:i',
        'first_day'      => 1,
    ];

    use DisplayFormat;
    use ReturnFormat;
    use FirstDay;
}
