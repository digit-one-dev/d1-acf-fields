<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class PageLink extends BaseField
{
    protected $prefix;
    protected $name = 'page_link';
    protected $label = 'Seiten-Link';
    protected $type = 'page_link';
    protected $args = [
        'allow_null' => true,
    ];
}
