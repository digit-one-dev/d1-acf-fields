<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseParentField;

class Repeater extends BaseParentField
{
    protected $prefix;
    protected $name = 'repeater';
    protected $type = 'repeater';
    protected $label = 'Wiederholung';
    protected $args = [
        'button_label' => 'hinzufügen',
    ];
}
