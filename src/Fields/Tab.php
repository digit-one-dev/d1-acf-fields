<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Endpoint;
use DigitOne\Acf\OptionTraits\Placement;

class Tab extends BaseField
{
    protected $prefix;
    protected $name = 'tab';
    protected $label = 'Tab';
    protected $type = 'tab';

    use Endpoint;
    use Placement;
}
