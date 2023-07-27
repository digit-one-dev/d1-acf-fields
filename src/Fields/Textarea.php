<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\MaxLength;
use DigitOne\Acf\OptionTraits\NewLines;
use DigitOne\Acf\OptionTraits\Placeholder;
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
    
    use MaxLength;
    use Rows;
    use NewLines;
    use Placeholder;
}
