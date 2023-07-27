<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Append;
use DigitOne\Acf\OptionTraits\DefaultValue;
use DigitOne\Acf\OptionTraits\Placeholder;
use DigitOne\Acf\OptionTraits\Prepend;

class Email extends BaseField
{
    protected $prefix;
    protected $name = 'email';
    protected $type = 'email';
    protected $label = 'E-Mail';

    use Placeholder;
    use Prepend;
    use Append;
    use Placeholder;
    use DefaultValue;
}
