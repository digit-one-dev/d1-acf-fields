<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Message;
use DigitOne\Acf\OptionTraits\Ui;
use DigitOne\Acf\OptionTraits\UiOffText;
use DigitOne\Acf\OptionTraits\UiOnText;

class TrueFalse extends BaseField
{
    protected $prefix;
    protected $name = 'true_false';
    protected $label = 'Frage';
    protected $type = 'true_false';

    use Ui;
    use Message;
    use UiOnText;
    use UiOffText;
}
