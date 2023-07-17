<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Append;
use DigitOne\Acf\OptionTraits\Placeholder;
use DigitOne\Acf\OptionTraits\Prepend;

class Password extends BaseField
{
    protected $prefix;
    protected $name = 'password';
    protected $type = 'password';
    protected $label = 'Passwort';

    use Prepend;
    use Append;
    use Placeholder;
}