<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Endpoint;
use DigitOne\Acf\OptionTraits\MultiExpand;
use DigitOne\Acf\OptionTraits\Open;

class Accordion extends BaseField
{
    protected $prefix;
    protected $name = 'accordion';
    protected $label = 'Akkordeon';
    protected $type = 'accordion';

    use Open;
    use MultiExpand;
    use Endpoint;
}