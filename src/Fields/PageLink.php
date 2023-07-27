<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AllowArchives;
use DigitOne\Acf\OptionTraits\AllowNull;
use DigitOne\Acf\OptionTraits\Multiple;
use DigitOne\Acf\OptionTraits\PostStatus;
use DigitOne\Acf\OptionTraits\PostType;
use DigitOne\Acf\OptionTraits\Taxonomy;

class PageLink extends BaseField
{
    protected $prefix;
    protected $name = 'page_link';
    protected $label = 'Seiten-Link';
    protected $type = 'page_link';
    protected $args = [
        'allow_null' => true,
    ];

    use PostType;
    use PostStatus;
    use Taxonomy;
    use Multiple;
    use AllowNull;
    use AllowArchives;
}
