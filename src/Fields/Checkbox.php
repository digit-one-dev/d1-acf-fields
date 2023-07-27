<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AllowCustum;
use DigitOne\Acf\OptionTraits\Choices;
use DigitOne\Acf\OptionTraits\CustomChoiceButtonText;
use DigitOne\Acf\OptionTraits\Layout;
use DigitOne\Acf\OptionTraits\ReturnFormat;
use DigitOne\Acf\OptionTraits\SaveCustom;
use DigitOne\Acf\OptionTraits\Toggle;

/**
 * Checkbox Field for ACF
 * Check the details and options here: https://www.advancedcustomfields.com/resources/checkbox/
 */
class Checkbox extends BaseField
{
    protected $prefix;
    protected $name = 'checkbox';
    protected $type = 'checkbox';
    protected $label = 'Checkbox';
    protected $args = [
        'choices' => [],
        'allow_custom' => 0,
        'save_custom' => 0,
        'layout' => 'vertical',
        'return_format' => 'value',
    ];

    use Choices;
    use ReturnFormat;
    use AllowCustum;
    use Layout;
    use Toggle;
    use SaveCustom;
    use CustomChoiceButtonText;

}
