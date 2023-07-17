<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AllowNull;
use DigitOne\Acf\OptionTraits\Multiple;
use DigitOne\Acf\OptionTraits\ReturnFormat;
use DigitOne\Acf\OptionTraits\Role;

class User extends BaseField
{
    protected $prefix;
    protected $name = 'user';
    protected $label = 'User';
    protected $type = 'user';

    use Multiple;
    use AllowNull;
    use ReturnFormat;
    use Role;
}
