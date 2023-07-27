<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\EnableOpacity;
use DigitOne\Acf\OptionTraits\ReturnFormat;

class ColorPicker extends BaseField
{
    protected $prefix;
    protected $name = 'color_picker';
    protected $type = 'color_picker';
    protected $label = 'Farbe';

    use ReturnFormat;
    use EnableOpacity;
}
