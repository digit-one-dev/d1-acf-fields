
<?php

use PHPUnit\Framework\TestCase;

use DigitOne\Acf\Fields\FlexibleContent;
use DigitOne\Acf\Fields\Layout;
use DigitOne\Acf\Fields\Text;


class TestField extends Text {
    public function transform(mixed $data): mixed
    {
        return "transformed";
    }
}

class TestLayout extends Layout {
    public function transform(mixed $data): mixed
    {
        $tranformed = parent::transform($data);
        $tranformed['transformed'] = true;

        return $tranformed;
    }
}

final class FlexibleContentTest extends TestCase
{

    public function test_recursive_prefixing(): void
    {
        $layout1_sub_field = Text::make('sub_field');
        $layout1 = Layout::make('layout_1')->sub_fields([$layout1_sub_field]);

        $layout2 = Layout::make('layout_2');

        $flexible_content = FlexibleContent::make('flexible_content')->layouts([
            $layout1,
            $layout2,
        ]);

        $flexible_content->build();

        $this->assertSame('_flexible_content_layout_1', $layout1->get_key());
        $this->assertSame('_flexible_content_layout_1_sub_field', $layout1_sub_field->get_key());

        $this->assertSame('_flexible_content_layout_2', $layout2->get_key());
    }


    public function test_recursive_transform(): void
    {
        $layout1_sub_field = TestField::make('sub_field');
        $layout1 = TestLayout::make('layout_1')->sub_fields([$layout1_sub_field]);

        $layout2 = TestLayout::make('layout_2');

        $flexible_content = FlexibleContent::make('flexible_content')->layouts([
            $layout1,
            $layout2,
        ]);


        $acf_data = [
            0 => [
                'acf_fc_layout' => 'layout_1',
                'sub_field' => 'test' // will be changed to "transformed" by tranform method of TestField
            ],
            1 => [
                'acf_fc_layout' => 'layout_2',
            ],
            2 => [
                'acf_fc_layout' => 'layout_1',
                'sub_field' => 'test' // will be changed to "transformed" by tranform method of TestField
            ]
        ];

        $tranformed = $flexible_content->transform($acf_data);

        $this->assertSame("transformed", $tranformed[0]['sub_field']);

        // transform method of TestLayout sets 'transformed' to true
        $this->assertTrue($tranformed[0]['transformed']);
        $this->assertTrue($tranformed[1]['transformed']);

        $this->assertSame("transformed", $tranformed[2]['sub_field']);
    }
}
