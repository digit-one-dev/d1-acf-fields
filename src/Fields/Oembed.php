<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Height;
use DigitOne\Acf\OptionTraits\Width;

class Oembed extends BaseField
{
    protected $prefix;
    protected $name = 'oembed';
    protected $type = 'oembed';
    protected $label = 'Video (z.B: Youtube Link)';

    use Height;
    use Width;
}
