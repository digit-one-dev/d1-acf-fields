<?php
namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Number extends BaseField
{
    protected $prefix;
    protected $name = 'number';
    protected $label = 'Number';
    protected $type = 'number';
}
