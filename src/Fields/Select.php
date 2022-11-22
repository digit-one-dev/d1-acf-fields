<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Choices;

class Select extends BaseField
{
    protected $prefix;
    protected $name = 'select';
    protected $type = 'select';
    protected $label = 'Auswahl';
    protected $args = [
        'choices'   => [],
    ];

    use Choices;
}
