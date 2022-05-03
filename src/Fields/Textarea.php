<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Textarea extends BaseField
{
    protected $prefix;
    protected $name = 'textarea';
    protected $label = 'Textfeld';
    protected $type = 'textarea';
    protected $args = [
        'new_lines' => 'br',
    ];
}
