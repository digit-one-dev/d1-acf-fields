<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AriaLabel;
use DigitOne\Acf\OptionTraits\Library;
use DigitOne\Acf\OptionTraits\MaxHeight;
use DigitOne\Acf\OptionTraits\MaxSize;
use DigitOne\Acf\OptionTraits\MaxWidth;
use DigitOne\Acf\OptionTraits\MimeTypes;
use DigitOne\Acf\OptionTraits\MinHeight;
use DigitOne\Acf\OptionTraits\MinSize;
use DigitOne\Acf\OptionTraits\MinWidth;
use DigitOne\Acf\OptionTraits\PreviewSize;
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
    use Library;
    use MaxWidth;
    use MinWidth;
    use MinHeight;
    use MinSize;
    use MaxHeight;
    use MaxSize;
    use MimeTypes;
    use PreviewSize;
}
