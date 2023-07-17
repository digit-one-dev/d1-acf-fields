<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Append;
use DigitOne\Acf\OptionTraits\MaxLength;
use DigitOne\Acf\OptionTraits\Placeholder;
use DigitOne\Acf\OptionTraits\Prepend;

class Text extends BaseField
{
    protected $prefix;
    protected $name = 'text';
    protected $label = 'Text';
    protected $type = 'text';

    use MaxLength;
    use Prepend;
    use Append;
    use Placeholder;
}

