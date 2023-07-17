<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AllowNull;
use DigitOne\Acf\OptionTraits\Choices;
use DigitOne\Acf\OptionTraits\Layout;
use DigitOne\Acf\OptionTraits\OtherChoice;
use DigitOne\Acf\OptionTraits\ReturnFormat;
use DigitOne\Acf\OptionTraits\SaveOtherChoice;

class Radio extends BaseField
{
    protected $prefix;
    protected $name = 'radio';
    protected $type = 'radio';
    protected $label = 'Radiobutton';

    use Choices;
    use ReturnFormat;
    use AllowNull;
    use Layout;
    use OtherChoice;
    use SaveOtherChoice;
}