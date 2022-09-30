
<?php

use PHPUnit\Framework\TestCase;

use DigitOne\Acf\ConditionalLogic\ConditionalLogic;
use DigitOne\Acf\Fields\TrueFalse;
use DigitOne\Acf\Fields\Text;
use DigitOne\Acf\Fields\Group;

final class ConditionalLogicParentFieldTest extends TestCase
{

    public function test_respects_recursive_build_single_level(): void
    {
        $toggle = (new TrueFalse)->name('toggle');

        $text_field_name = 'text';

        $group_name = 'group_name';
        $group = (new Group)->name('group')
            ->sub_fields([
                $toggle,
                (new Text)->name($text_field_name)
                    ->conditional_logic(new ConditionalLogic($toggle, '==', '1'))
            ]);
        
        $this->assertSame(
            [
                [
                    [
                        'field' => $toggle->get_key(),
                        'operator' => '==',
                        'value' => '1'
                    ]
                ]
            ],
            $group->build()['sub_fields'][$text_field_name]['conditional_logic']
        );
    }

    public function test_respects_recursive_build_multi_level(): void
    {
        $toggle = (new TrueFalse)->name('toggle');

        $text_field_name = 'text';

        $child_group_name = 'child_group';
        $child_group = (new Group)->name($child_group_name)
            ->sub_fields([
                $toggle,
                (new Text)->name($text_field_name)
                    ->conditional_logic(new ConditionalLogic($toggle, '==', '1'))
            ]);

        $parent_group = (new Group)->name('parent_group')
            ->sub_fields([$child_group]);
        

        $this->assertSame(
            [
                [
                    [
                        'field' => $toggle->get_key(),
                        'operator' => '==',
                        'value' => '1'
                    ]
                ]
            ],
            $parent_group->build()['sub_fields'][$child_group_name]['sub_fields'][$text_field_name]['conditional_logic']
        );
    }



    public function test_respects_recursive_legacy(): void
    {
        $toggle = (new TrueFalse)->name('toggle');

        $text_field_name = 'text';

        $group_name = 'group_name';
        $group = (new Group)->name('group')
            ->sub_fields([
                $toggle,
            ]) // the legacy solution was to call sub_fields again after calling it with the field that shall be used for a condition
            ->sub_fields([  
                (new Text)->name($text_field_name)
                    ->conditional_logic([
                        [
                            [
                                'field' => $toggle->get_key(),
                                'operator' => '==',
                                'value' => '1'
                            ]
                        ]
                    ])
            ]);
        
        $this->assertSame(
            [
                [
                    [
                        'field' => $toggle->get_key(),
                        'operator' => '==',
                        'value' => '1'
                    ]
                ]
            ],
            $group->build()['sub_fields'][$text_field_name]['conditional_logic']
        );
    }
}
