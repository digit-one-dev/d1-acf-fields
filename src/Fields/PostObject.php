<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AllowNull;
use DigitOne\Acf\OptionTraits\Multiple;
use DigitOne\Acf\OptionTraits\PostStatus;
use DigitOne\Acf\OptionTraits\PostType;
use DigitOne\Acf\OptionTraits\ReturnFormat;
use DigitOne\Acf\OptionTraits\Taxonomy;
use DigitOne\Acf\OptionTraits\Ui;

class PostObject extends BaseField
{
    protected $prefix;
    protected $name = 'post_object';
    protected $type = 'post_object';
    protected $label = 'Beitrag';
    protected $args = [
        'filters'   => [ 'search' ],
        'return_format' => 'id',
    ];

    use ReturnFormat;
    use Multiple;
    use AllowNull;
    use Ui;
    use PostType;
    use PostStatus;
    use Taxonomy;
}
