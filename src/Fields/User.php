<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Multiple;

class User extends BaseField
{
    protected $prefix;
    protected $name = 'user';
    protected $label = 'User';
    protected $type = 'user';

    use Multiple;
}
