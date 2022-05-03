<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Url extends BaseField
{
    protected $prefix;
    protected $name = 'url';
    protected $label = 'Url';
    protected $type = 'url';
}
