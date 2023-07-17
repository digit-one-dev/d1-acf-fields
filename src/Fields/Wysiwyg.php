<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Tabs;
use DigitOne\Acf\OptionTraits\Toolbar;
use DigitOne\Acf\OptionTraits\MediaUpload;
use DigitOne\Acf\OptionTraits\Delay;

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

    use Tabs;
    use Toolbar;
    use MediaUpload;
    use Delay;
}
