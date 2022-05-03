<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Wysiwyg extends BaseField
{
    protected $prefix;
    protected $name = 'content';
    protected $label = 'Inhalt';
    protected $type = 'wysiwyg';
    protected $args = [
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload'  => 0,
    ];
}
