
<?php

use PHPUnit\Framework\TestCase;

use DigitOne\Acf\ConditionalLogic\ConditionalLogic;
use DigitOne\Acf\Fields\TrueFalse;
use DigitOne\Acf\Fields\Text;

final class ConditionalLogicFieldTest extends TestCase
{

    public function test_builds_without_conditional_logic(): void
    {
        $some_field = new Text('some_prefix2', 'some_name2');

        $this->assertSame(false, $some_field->build()['conditional_logic']);
    }

    public function test_builds_single_condition(): void
    {
        $some_toggle = new TrueFalse('some_prefix', 'some_name');

        $some_field = new Text('some_prefix2', 'some_name2');
        
        $some_field->conditional_logic(new ConditionalLogic($some_toggle, '==', '1'));
        
        $this->assertSame(
            [
                [
                    [
                        'field' => $some_toggle->get_key(),
                        'operator' => '==',
                        'value' => '1'
                    ]
                ]
            ],
            $some_field->build()['conditional_logic']
        );
    }

    

    public function test_single_condition_respects_key_change(): void
    {
        $some_toggle = new TrueFalse('some_prefix', 'some_name');

        $some_field = new Text('some_prefix2', 'some_name2');
        
        $some_field->conditional_logic(new ConditionalLogic($some_toggle, '==', '1'));

        // changing the prefix changes the key
        $some_toggle->set_prefix('a_new_prefix');
        
        $this->assertSame(
            [
                [
                    [
                        'field' => $some_toggle->get_key(),
                        'operator' => '==',
                        'value' => '1'
                    ]
                ]
            ],
            $some_field->build()['conditional_logic']
        );
    }


    public function test_builds_complex_and_or_condition(): void
    {
        $toggle1 = new TrueFalse('some_prefix', 'some_name');
        $operator1 = '==';
        $value1 = '1';
        $toggle2 = new TrueFalse('some_prefix2', 'some_name2');
        $operator2 = '==';
        $value2 = '0';
        $toggle3 = new TrueFalse('some_prefix3', 'some_name3');
        $operator3 = '<';
        $value3 = 'other2';

        $field = (new Text)->conditional_logic(
            (new ConditionalLogic($toggle1, $operator1, $value1))
                ->and($toggle2, $operator2, $value2)
                ->or($toggle3, $operator3, $value3)
        );
        
        $this->assertSame(
            [
                [
                    [
                        'field' => $toggle1->get_key(),
                        'operator' => $operator1,
                        'value' => $value1
                    ],
                    [
                        'field' => $toggle2->get_key(),
                        'operator' => $operator2,
                        'value' => $value2
                    ]
                ],
                [
                    [
                        'field' => $toggle3->get_key(),
                        'operator' => $operator3,
                        'value' => $value3
                    ]
                ]
            ],
            $field->build()['conditional_logic']
        );

        $field = (new Text)->conditional_logic(
            (new ConditionalLogic($toggle1, $operator1, $value1))
                ->or($toggle2, $operator2, $value2)
                ->and($toggle3, $operator3, $value3)
        );
        
        $this->assertSame(
            [
                [
                    [
                        'field' => $toggle1->get_key(),
                        'operator' => $operator1,
                        'value' => $value1
                    ],
                ],
                [
                    [
                        'field' => $toggle2->get_key(),
                        'operator' => $operator2,
                        'value' => $value2
                    ],
                    [
                        'field' => $toggle3->get_key(),
                        'operator' => $operator3,
                        'value' => $value3
                    ]
                ]
            ],
            $field->build()['conditional_logic']
        );
    }

    public function test_complex_and_or_condition_respects_key_changes(): void
    {
        $toggle1 = new TrueFalse('some_prefix', 'some_name');
        $operator1 = '==';
        $value1 = '1';
        $toggle2 = new TrueFalse('some_prefix2', 'some_name2');
        $operator2 = '==';
        $value2 = '0';
        $toggle3 = new TrueFalse('some_prefix3', 'some_name3');
        $operator3 = '<';
        $value3 = 'other2';

        $field = (new Text)->conditional_logic(
            (new ConditionalLogic($toggle1, $operator1, $value1))
                ->and($toggle2, $operator2, $value2)
                ->or($toggle3, $operator3, $value3)
        );

        // changig field prefix changes their keys
        $toggle1->set_prefix('anything1');
        $toggle2->set_prefix('anything2');
        $toggle3->set_prefix('anything3');
        
        $this->assertSame(
            [
                [
                    [
                        'field' => $toggle1->get_key(),
                        'operator' => $operator1,
                        'value' => $value1
                    ],
                    [
                        'field' => $toggle2->get_key(),
                        'operator' => $operator2,
                        'value' => $value2
                    ]
                ],
                [
                    [
                        'field' => $toggle3->get_key(),
                        'operator' => $operator3,
                        'value' => $value3
                    ]
                ]
            ],
            $field->build()['conditional_logic']
        );

        $field = (new Text)->conditional_logic(
            (new ConditionalLogic($toggle1, $operator1, $value1))
                ->or($toggle2, $operator2, $value2)
                ->and($toggle3, $operator3, $value3)
        );

        $toggle1->set_prefix('other1');
        $toggle2->set_prefix('other2');
        $toggle3->set_prefix('other3');
        
        $this->assertSame(
            [
                [
                    [
                        'field' => $toggle1->get_key(),
                        'operator' => $operator1,
                        'value' => $value1
                    ],
                ],
                [
                    [
                        'field' => $toggle2->get_key(),
                        'operator' => $operator2,
                        'value' => $value2
                    ],
                    [
                        'field' => $toggle3->get_key(),
                        'operator' => $operator3,
                        'value' => $value3
                    ]
                ]
            ],
            $field->build()['conditional_logic']
        );
    }
}
