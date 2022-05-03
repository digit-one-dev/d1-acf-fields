<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class TrueFalse extends BaseField
{
    protected $prefix;
    protected $name = 'true_false';
    protected $label = 'Frage';
    protected $type = 'true_false';
}
