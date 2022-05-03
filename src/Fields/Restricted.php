<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Restricted extends BaseField
{
    protected $prefix;
    protected $name = 'restricted';
    protected $label = 'Information';
    protected $type = 'message';
    protected $args = [
        'message'   => __('Sie sind nicht dazu berechtigt, diesen Inhalt zu editieren.', 'digit-one'),
    ];
}
