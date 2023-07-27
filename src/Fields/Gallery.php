<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Insert;
use DigitOne\Acf\OptionTraits\Library;
use DigitOne\Acf\OptionTraits\Max;
use DigitOne\Acf\OptionTraits\MaxHeight;
use DigitOne\Acf\OptionTraits\MaxSize;
use DigitOne\Acf\OptionTraits\MaxWidth;
use DigitOne\Acf\OptionTraits\MimeTypes;
use DigitOne\Acf\OptionTraits\Min;
use DigitOne\Acf\OptionTraits\MinHeight;
use DigitOne\Acf\OptionTraits\MinSize;
use DigitOne\Acf\OptionTraits\MinWidth;
use DigitOne\Acf\OptionTraits\PreviewSize;
use DigitOne\Acf\OptionTraits\ReturnFormat;

class Gallery extends BaseField
{
    protected $prefix;
    protected $name = 'gallery';
    protected $type = 'gallery';
    protected $label = 'Bildergalerie';

    use ReturnFormat;
    use Library;
    use Min;
    use Max;
    use MinWidth;
    use MinHeight;
    use MinSize;
    use MaxWidth;
    use MaxHeight;
    use MaxSize;
    use MimeTypes;
    use PreviewSize;
    use Insert;
}
