<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Placeholder;

class Url extends BaseField
{
    protected $prefix;
    protected $name = 'url';
    protected $label = 'Url';
    protected $type = 'url';

    use Placeholder;
}
