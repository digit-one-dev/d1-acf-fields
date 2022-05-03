<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Link extends BaseField
{
    protected $prefix;
    protected $name = 'link';
    protected $label = 'Link';
    protected $type = 'link';
    protected $args = ['return_format' => 'array'];
}
