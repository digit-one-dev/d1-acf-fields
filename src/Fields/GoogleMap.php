<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\CenterLat;
use DigitOne\Acf\OptionTraits\CenterLng;
use DigitOne\Acf\OptionTraits\Height;
use DigitOne\Acf\OptionTraits\Zoom;

class GoogleMap extends BaseField
{
    protected $prefix;
    protected $name = 'google_map';
    protected $type = 'google_map';
    protected $label = 'Goolge Map';

    use CenterLat;
    use CenterLng;
    use Zoom;
    use Height;
}
