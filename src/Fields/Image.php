<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AriaLabel;
use DigitOne\Acf\OptionTraits\Required;
use DigitOne\Acf\OptionTraits\ReturnFormat;

class Image extends BaseField
{
    protected $prefix;
    protected $name = 'image';
    protected $label = 'Bild';
    protected $type = 'image';

    use AriaLabel;
    use Required;
    use ReturnFormat;
    
}
