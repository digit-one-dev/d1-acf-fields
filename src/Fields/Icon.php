<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Icon extends BaseField
{
    protected $prefix;
    protected $name_key = 'icon';
    protected $label = 'Icon';
    protected $type = 'fonticonpicker';
}
