<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseParentField;

class Layout extends BaseParentField
{
    protected $prefix;
    protected $name = 'layout';
    protected $label = 'Layout';
    protected $type = 'layout';
    protected $args = [
        'display' => 'block',
    ];
}
