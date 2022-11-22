<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Choices;

class Buttongroup extends BaseField
{
    protected $prefix;
    protected $name = 'button_group';
    protected $label = 'Buttongroup';
    protected $type = 'button_group';

    use Choices;
}
