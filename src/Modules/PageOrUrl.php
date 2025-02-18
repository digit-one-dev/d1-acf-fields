<?php

namespace DigitOne\Acf\Modules;

use DigitOne\Acf\BaseField;
use DigitOne\Acf\Fields\Url;
use DigitOne\Acf\Fields\Select;
use DigitOne\Acf\Fields\PageLink;

class PageOrUrl extends BaseField
{
    protected $prefix;
    protected $name = 'page_or_url';
    protected $label = 'Link';

    /**
     * @param string $name_key
     * @param string $label
     * @param array  $parameter
     *
     * @return array
     */
    public function build($name_key = '', $label = '', array $parameter = [])
    {
        $selection = new Select($this->get_name(), 'link_type', 'Url oder Seite');

        return [
            $selection->build([
                'choices' => [
                    'useLink' => __('Verwende einen Link', 'towa_translation'),
                    'useUrl'  => __('Verwende eine Url', 'towa_translation'),
                ],
            ]),
            (new PageLink($this->get_name(), 'pagelink', 'Seite'))->build([
                'conditional_logic' => [
                    [
                        [
                            'field'    => $selection->get_key(),
                            'operator' => '==',
                            'value'    => 'useLink',
                        ],
                    ],
                ],
            ]),
            (new Url($this->get_name(), 'link', 'Link'))->build([
                'conditional_logic' => [
                    [
                        [
                            'field'    => $selection->get_key(),
                            'operator' => '==',
                            'value'    => 'useUrl',
                        ],
                    ],
                ],
            ]),
        ];
    }
}
