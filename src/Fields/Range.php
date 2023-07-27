<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Append;
use DigitOne\Acf\OptionTraits\Max;
use DigitOne\Acf\OptionTraits\Min;
use DigitOne\Acf\OptionTraits\Prepend;
use DigitOne\Acf\OptionTraits\Step;

class Range extends BaseField
{
    protected $prefix;
    protected $name = 'range';
    protected $type = 'range';
    protected $label = 'Bereich';

    use Min;
    use Max;
    use Step;
    use Prepend;
    use Append;
}