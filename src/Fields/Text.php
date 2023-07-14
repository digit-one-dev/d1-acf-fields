<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\MaxLength;

class Text extends BaseField
{
    protected $prefix;
    protected $name = 'text';
    protected $label = 'Text';
    protected $type = 'text';

    use MaxLength;
}

