<?php

namespace DigitOne\Acf\Fields;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\OptionTraits\AddTerm;
use DigitOne\Acf\OptionTraits\AllowNull;
use DigitOne\Acf\OptionTraits\FieldType;
use DigitOne\Acf\OptionTraits\LoadTerms;
use DigitOne\Acf\OptionTraits\Multiple;
use DigitOne\Acf\OptionTraits\ReturnFormat;
use DigitOne\Acf\OptionTraits\SaveTerms;
use DigitOne\Acf\OptionTraits\Taxonomy as OptionTraitsTaxonomy;

class Taxonomy extends BaseField
{
    protected $prefix;
    protected $name = 'taxonomy';
    protected $label = 'Taxonomie';
    protected $type = 'taxonomy';
    protected $args = [
        'taxonomy'    => 'category',
        'field_type'  => 'checkbox',
        'add_term'    => 0,
    ];

    use OptionTraitsTaxonomy;
    use AddTerm;
    use SaveTerms;
    use LoadTerms;
    use ReturnFormat;
    use FieldType;
    use Multiple;
    use AllowNull;
}
