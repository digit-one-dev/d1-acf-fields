<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\EscHtml;
use DigitOne\Acf\OptionTraits\Message as OptionTraitsMessage;
use DigitOne\Acf\OptionTraits\NewLines;

class Message extends BaseField
{
    protected $prefix;
    protected $name = 'message';
    protected $label = 'Message';
    protected $type = 'message';

    use OptionTraitsMessage;
    use NewLines;
    use EscHtml;
}
