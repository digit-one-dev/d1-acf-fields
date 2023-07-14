<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AriaLabel;
use DigitOne\Acf\OptionTraits\MaxLength;
use DigitOne\Acf\OptionTraits\NewLines;
use DigitOne\Acf\OptionTraits\Required;
use DigitOne\Acf\OptionTraits\Rows;

class Textarea extends BaseField
{
    protected $prefix;
    protected $name = 'textarea';
    protected $label = 'Textfeld';
    protected $type = 'textarea';
    protected $args = [
        'new_lines' => 'br',
    ];
    
    use Required;
    use MaxLength;
    use Rows;
    use NewLines;
    use AriaLabel;
}
