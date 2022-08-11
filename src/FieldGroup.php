<?php

namespace DigitOne\Acf;
use DigitOne\Acf\Fields\Group;

/**
 * The ACF FieldGroup that is used to register and display fields depending on different custom rules.
 * 
 * This class registeres all its ACF fields as sub fields of an internal ACF Group (wrapper_group) that is named
 * same as the FieldGroup itself. Data of the fields of a FieldGroup with name 'some_field_group' can be 
 * accessed by calling get_field('some_field_group') - under the hood you are fetching the data from the wrapper group.
 */
class FieldGroup
{
    private $data = [
        'key'      => '',
        'title'    => '',
        'fields'   => [],
        'location' => [],
    ];

    private $acf_data = [];

    /**
     * Fields of a FieldGroup are registered without a wrapper per default.
     * This wrapper group ensures that get_field($name) returns the data of this FieldGroup 
     * (the data of its children)
     */
    private $wrapper_group;


    public function __construct(string $name, string $label = '')
    {
        $this->data['title'] = $label;
        $this->data['key']   = "group_{$name}";
        $this->wrapper_group = new Group($this->data['key'], $name, label: '');
    }

    /**
     * Fetches the data of the fields of this FieldGroup
     * 
     * @param mixed post_id (optional) the post id to pass onto ACF get_field()
     * @return FieldGroup the updated instance
     */
    public function fetch(mixed $post_id = false)
    {
        $this->acf_data = get_field($this->wrapper_group->get_name(), $post_id) ?? [];

        return $this;
    }

    /**
     * Transforms the previously fetched ACF data.
     * 
     * @return array the transformed data
     */
    public function transform()
    {
        return $this->wrapper_group->transform($this->acf_data);
    }

    /**
     * @param string $cpt
     * 
     * @return FieldGroup the updated instance
     */
    public function for_cpt(string $cpt = 'post')
    {
        $this->data['location'][] = [
            [
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => $cpt,
            ],
        ];

        return $this;
    }

    /**
     * @param array $cpts
     * 
     * @return FieldGroup the updated instance
     */
    public function for_all_cpts(array $cpts)
    {
        $this->data['location'] = collect($cpts)->map(function ($cpt) {
            return [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => $cpt,
                ],
            ];
        })->toArray();

        return $this;
    }

    /**
     * @param string $tax
     * 
     * @return FieldGroup the updated instance
     */
    public function for_taxonomy(string $tax = '')
    {
        $this->data['location'][] = [
            [
                'param'    => 'taxonomy',
                'operator' => '==',
                'value'    => $tax,
            ],
        ];

        return $this;
    }

    /**
     * @param string $menu
     * 
     * @return FieldGroup the updated instance
     */
    public function for_menu(string $menu = '')
    {
        $this->data['location'][] = [
            [
                'param'    => 'nav_menu_item',
                'operator' => '==',
                'value'    => $menu,
            ],
        ];

        return $this;
    }

    /**
     * @deprecated use FieldGroup::location() instead
     * 
     * @param array $rule
     * 
     * @return FieldGroup the updated instance
     */
    public function for_location(array $rule)
    {
        return $this->location($rule);
    }

    /**
     * @param array $rule
     * 
     * @return FieldGroup the updated instance
     */
    public function location(array $rule)
    {
        $this->data[ 'location' ][] = $rule;

        return $this;
    }

    /**
     * @deprecated use FieldGroup::sub_fields() instead
     * 
     * @param array $fields
     * 
     * @return FieldGroup the updated instance
     */
    public function set_fields(array $fields)
    {
        $this->data['fields'] = $fields;

        return $this;
    }

    /**
     * Sets the sub_fields of the wrapper_group
     * (The wrapper_group is the one and only field of this FieldGroup)
     * 
     * @param array[BaseField] sub_fields
     * 
     * @return FieldGroup the updated instance
     */
    public function sub_fields(array $sub_fields)
    {
        $this->wrapper_group->sub_fields($sub_fields);
        $this->data['fields'] = [ $this->wrapper_group->build() ];

        return $this;
    }

    /**
     * @param string $setting
     * @param mixed $data
     * 
     * @return FieldGroup the updated instance
     */
    public function set_setting(string $setting, mixed $data)
    {
        $this->data[ $setting ] = $data;

        return $this;
    }

    /**
     * @param array $settings
     * 
     * @return FieldGroup the updated instance
     */
    public function settings(array $settings)
    {
        $this->data = array_merge($this->data, $settings);

        return $this;
    }

    public function register()
    {
        acf_add_local_field_group($this->data);
    }

    public function get_wrapper_group()
    {
        return $this->wrapper_group;
    }
}
