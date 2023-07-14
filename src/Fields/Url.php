<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AriaLabel;
use DigitOne\Acf\OptionTraits\Required;

class Url extends BaseField
{
    protected $prefix;
    protected $name = 'url';
    protected $label = 'Url';
    protected $type = 'url';

    use AriaLabel;
    use Required;
}
