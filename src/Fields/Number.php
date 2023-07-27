<?php
namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Append;
use DigitOne\Acf\OptionTraits\Max;
use DigitOne\Acf\OptionTraits\Min;
use DigitOne\Acf\OptionTraits\Placeholder;
use DigitOne\Acf\OptionTraits\Prepend;
use DigitOne\Acf\OptionTraits\Step;

class Number extends BaseField
{
    protected $prefix;
    protected $name = 'number';
    protected $label = 'Number';
    protected $type = 'number';

    use Min;
    use Max;
    use Step;
    use Prepend;
    use Append;
    use Placeholder;
}


