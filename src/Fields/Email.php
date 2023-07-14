<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Append;
use DigitOne\Acf\OptionTraits\AriaLabel;
use DigitOne\Acf\OptionTraits\Placeholder;
use DigitOne\Acf\OptionTraits\Prepend;
use DigitOne\Acf\OptionTraits\Required;

class Email extends BaseField
{
    protected $prefix;
    protected $name = 'email';
    protected $type = 'email';
    protected $label = 'E-Mail';

    use AriaLabel;
    use Required;
    use Placeholder;
    use Prepend;
    use Append;
}
