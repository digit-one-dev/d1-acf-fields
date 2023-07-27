<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AllowNull;
use DigitOne\Acf\OptionTraits\Choices;
use DigitOne\Acf\OptionTraits\Layout;
use DigitOne\Acf\OptionTraits\ReturnFormat;

class Buttongroup extends BaseField
{
    protected $prefix;
    protected $name = 'button_group';
    protected $label = 'Buttongroup';
    protected $type = 'button_group';

    use Choices;
    use ReturnFormat;
    use AllowNull;
    use Layout;
}
