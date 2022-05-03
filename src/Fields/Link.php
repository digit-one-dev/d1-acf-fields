<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Link extends BaseField
{
    protected $prefix;
    protected $name = 'link';
    protected $label = 'Link';
    protected $type = 'link';

    public function build(array $parameter = [])
    {
        $default = ['return_format' => 'array'];

        return parent::build(array_merge($default, $parameter));
    }
}
