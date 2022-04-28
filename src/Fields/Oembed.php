<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;

class Oembed extends BaseField
{
    protected $prefix;
    protected $name = 'oembed';
    protected $type = 'oembed';
    protected $label = 'Video (z.B: Youtube Link)';
}
