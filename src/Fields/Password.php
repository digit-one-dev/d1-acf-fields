<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Append;
use DigitOne\Acf\OptionTraits\AriaLabel;
use DigitOne\Acf\OptionTraits\Prepend;
use DigitOne\Acf\OptionTraits\Required;

class Password extends BaseField
{
    protected $prefix;
    protected $name = 'password';
    protected $type = 'password';
    protected $label = 'Passwort';

    use AriaLabel;
    use Required;
    use Prepend;
    use Append;
}