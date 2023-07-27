<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\CloneOption;
use DigitOne\Acf\OptionTraits\Display;
use DigitOne\Acf\OptionTraits\Layout;
use DigitOne\Acf\OptionTraits\PrefixLabel;
use DigitOne\Acf\OptionTraits\PrefixName;

class CloneField extends BaseField
{
    protected $prefix;
    protected $type = 'clone';
    protected $name = 'clone';
    protected $label = 'Clone';
    protected $args = [
        'clone' => []
    ];

    use Layout;
    use CloneOption;
    use Display;
    use PrefixName;
    use PrefixLabel;
}
