<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\Filters;
use DigitOne\Acf\OptionTraits\Max;
use DigitOne\Acf\OptionTraits\Min;
use DigitOne\Acf\OptionTraits\PostStatus;
use DigitOne\Acf\OptionTraits\PostType;
use DigitOne\Acf\OptionTraits\ReturnFormat;
use DigitOne\Acf\OptionTraits\Taxonomy;
use DigitOne\Acf\OptionTraits\Elements;

class Relation extends BaseField
{
    protected $prefix;
    protected $name = 'relation';
    protected $type = 'relationship';
    protected $label = 'Relation';
    protected $args = [
        'filters'   => [ 'search' ],
        'return_format' => 'id',
    ];

    use PostType;
    use PostStatus;
    use Taxonomy;
    use Filters;
    use ReturnFormat;
    use Min;
    use Max;
    use Elements;
}
