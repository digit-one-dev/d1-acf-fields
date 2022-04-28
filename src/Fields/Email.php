<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Email extends BaseField
{
    protected $prefix;
    protected $name = 'email';
    protected $type = 'email';
    protected $label = 'E-Mail';
}
