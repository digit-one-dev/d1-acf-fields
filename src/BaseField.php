<?php

namespace DigitOne\Acf;

use DigitOne\Acf\Helper\AcfWpmlHelper;

class BaseField
{
    protected $prefix;
    protected $name;
    protected $label;
    private static $search_keys;
    protected $args = [];   
    private $wpml_preference;

    public function __construct($prefix = '', $name = null, $label = null, $args = [], $is_search_key = false, )
    {
        $this->set_prefix($prefix);
        $this->set_name($name);
        $this->set_label($label);
        $this->add_args($args);

        if ($is_search_key) {
            $this->add_as_search_key();
        }

        $this->post_construct();
    }

    /**
     * Method to be extended by subclasses to add their specific logic after construction.
     */
    public function post_construct() {}

    /**
     * $parameter to override
     *
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $defaults = [
            'key'   => $this->get_key(),
            'label' => $this->get_label(),
            'name'  => $this->get_name(),
            'type'  => $this->type,
            'wpml_cf_preferences' => $this->get_wpml_translation_preference(),
        ];

        return array_merge($defaults, $parameter, $this->args);
    }

    public function transform($data)
    {
        return $data;
    }


    /**
     * @param $prefix
     *
     * @return string
     */
    public function prefix($prefix)
    {
        $this->set_prefix($prefix);

        return $this;
    }

    /**
     * @param $prefix
     *
     * @return string
     */
    public function set_prefix($prefix)
    {
        $this->prefix = $prefix ?? $this->prefix;
    }

    /**
     * @return string
     */
    public function get_prefix()
    {
        return $this->prefix;
    }

    /**
     * @param $name
     *
     * @return string
     */
    public function name($name)
    {
        $this->set_name($name);

        return $this;
    }

    /**
     * @param $name
     *
     * @return string
     */
    public function set_name($name)
    {
        $this->name = $name ?? $this->name;
    }

    /**
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param $instructions
     *
     * @return string
     */
    public function instructions($instructions)
    {
        $this->set_instructions($instructions);

        return $this;
    }

    /**
     * @param $instructions
     *
     * @return string
     */
    public function set_instructions($instructions)
    {
        $this->args['instructions'] = $instructions;
    }

    /**
     * @return string
     */
    public function get_instructions()
    {
        return $this->args['instructions'];
    }
    
    /**
     * @param $label
     *
     * @return string
     */
    public function label($label)
    {
        $this->set_label($label);

        return $this;
    }

    /**
     * @param $label
     *
     * @return string
     */
    public function set_label($label)
    {
        $this->label = $label ?? $this->label;
    }

    /**
     * @return string
     */
    public function get_label()
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function get_key()
    {
        return $this->prefix . '_' . $this->get_name();
    }

    /**
     * @param $args
     *
     * @return string
     */
    public function args($args)
    {
        $this->add_args($args);

        return $this;
    }

    /**
     * @param $args
     *
     * @return string
     */
    private function add_args($args = [])
    {
        $this->args = array_merge($this->args, $args);
    }

    /**
     * @return string
     */
    public function get_args()
    {
        return $this->args;
    }

    /**
     * @return $this
     */
    private function add_as_search_key()
    {
        if (empty(self::$search_keys)) {
            self::$search_keys = [];
        }

        //prevent duplications
        if (in_array($this->get_name(), self::$search_keys)) {
            return;
        }

        self::$search_keys[] = $this->get_name();
    }

    /**
     * @return mixed
     */
    public static function get_search_keys()
    {
        return self::$search_keys;
    }

    /**
     * @param $wpml_translation_preference
     *
     * @return string
     */
    protected function wpml_translation_preference($wpml_translation_preference)
    {
        $this->set_wpml_translation_preference($wpml_translation_preference);

        return $this;
    }

    /**
     * @return number
     */
    public function get_wpml_translation_preference()
    {
        return $this->wpml_preference ? $this->wpml_preference : AcfWpmlHelper::TRANSLATE;
    }

    /**
     * ACFML wpml_cf_preferences. Use the AcfWpmlHelper-Class to assign a value
     *
     */
    public function set_wpml_translation_preference($value)
    {
        $this->wpml_preference = $value;
    }
}
