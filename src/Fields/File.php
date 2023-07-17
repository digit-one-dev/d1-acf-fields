<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Library;
use DigitOne\Acf\OptionTraits\MaxSize;
use DigitOne\Acf\OptionTraits\MimeTypes;
use DigitOne\Acf\OptionTraits\MinSize;
use DigitOne\Acf\OptionTraits\ReturnFormat;

class File extends BaseField
{
    protected $prefix;
    protected $name = 'file';
    protected $type = 'file';
    protected $label = 'Datei';

    use ReturnFormat;
    use Library;
    use MinSize;
    use MaxSize;
    use MimeTypes;
}
