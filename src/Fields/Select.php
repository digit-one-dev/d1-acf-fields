<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Ajax;
use DigitOne\Acf\OptionTraits\AllowNull;
use DigitOne\Acf\OptionTraits\Choices;
use DigitOne\Acf\OptionTraits\Multiple;
use DigitOne\Acf\OptionTraits\Placeholder;
use DigitOne\Acf\OptionTraits\ReturnFormat;
use DigitOne\Acf\OptionTraits\Ui;

class Select extends BaseField
{
    protected $prefix;
    protected $name = 'select';
    protected $type = 'select';
    protected $label = 'Auswahl';
    protected $args = [
        'choices'   => [],
    ];

    use Choices;
    use ReturnFormat;
    use Multiple;
    use AllowNull;
    use Ui;
    use Ajax;
    use Placeholder;
}
