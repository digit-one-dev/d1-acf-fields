<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseParentField;
use DigitOne\Acf\OptionTraits\Layout;
use DigitOne\Acf\OptionTraits\SubFields;

class Group extends BaseParentField
{
    protected $prefix;
    protected $name = 'group';
    protected $label = 'Group';
    protected $type = 'group';

    use Layout;
}
