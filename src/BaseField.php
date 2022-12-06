<?php

namespace DigitOne\Acf;

use DigitOne\Acf\Helper\AcfWpmlHelper;
use DigitOne\Acf\OptionTraits\Instructions;
use DigitOne\Acf\OptionTraits\Required;
use DigitOne\Acf\OptionTraits\DefaultValue;
use DigitOne\Acf\OptionTraits\ConditionalLogic;
use DigitOne\Acf\OptionTraits\Wrapper;

class BaseField
{
    use Instructions;
    use Required;
    use DefaultValue;
    use ConditionalLogic;
    use Wrapper;

    protected $prefix;
    protected $name;
    protected $label;
    private static $search_keys;
    protected $args = [];   
    private $wpml_preference;

    public function __construct(string $prefix = '', string $name = '', string $label = '', array $args = [], bool $is_search_key = false, )
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

    public static function make($name)
    {
        return (new self())->name($name);
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
    public function build(array $parameter = []): array    
    {
        $defaults = [
            'key'   => $this->get_key(),
            'label' => $this->get_label(),
            'name'  => $this->get_name(),
            'type'  => $this->type,
            'wpml_cf_preferences' => $this->get_wpml_translation_preference(),
        ];

        return array_merge($defaults, $parameter, $this->args, [
            'conditional_logic' => $this->build_conditional_logic()
        ]);
    }

    /**
     * Transformes the raw acf data that was returned for this field.
     * This method is intended to be overwritten by child classes that need 
     * specific transform logic.
     * 
     * @param mixed $data to transform
     * 
     * @return mixed the transformed data
     */
    public function transform(mixed $data): mixed
    {
        return $data;
    }


    /**
     * @param string $prefix
     *
     * @return self
     */
    public function prefix(string $prefix): self
    {
        $this->set_prefix($prefix);

        return $this;
    }

    /**
     * @param string $prefix
     */
    public function set_prefix(string $prefix)
    {
        $this->prefix = $prefix ?? $this->prefix;
    }

    /**
     * @return string
     */
    public function get_prefix(): string
    {
        return $this->prefix;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function name(string $name): self
    {
        $this->set_name($name);

        return $this;
    }

    /**
     * @param string $name
     */
    public function set_name(string $name)
    {
        $this->name = $name ?? $this->name;
    }

    /**
     * @return string
     */
    public function get_name(): string
    {
        return $this->name;
    }
    
    /**
     * @param string $label
     *
     * @return self
     */
    public function label(string $label): self
    {
        $this->set_label($label);

        return $this;
    }

    /**
     * @param string $label
     */
    public function set_label(string $label)
    {
        $this->label = $label ?? $this->label;
    }

    /**
     * @return string
     */
    public function get_label(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function get_key(): string
    {
        return $this->get_prefix() . '_' . $this->get_name();
    }

    /**
     * @param array $args
     *
     * @return self
     */
    public function args(array $args): self
    {
        $this->add_args($args);

        return $this;
    }

    /**
     * @param array $args
     */
    private function add_args(array $args = [])
    {
        $this->args = array_merge($this->args, $args);
    }

    /**
     * @return array
     */
    public function get_args(): array
    {
        return $this->args;
    }


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
    public static function get_search_keys(): mixed
    {
        return self::$search_keys;
    }

    /**
     * @param int $wpml_translation_preference
     *
     * @return self
     */
    public function wpml_translation_preference(int $wpml_translation_preference): self
    {
        $this->set_wpml_translation_preference($wpml_translation_preference);

        return $this;
    }

    /**
     * @return int
     */
    public function get_wpml_translation_preference(): int
    {
        return $this->wpml_preference ? $this->wpml_preference : AcfWpmlHelper::TRANSLATE;
    }

    /**
     * ACFML wpml_cf_preferences. Use the AcfWpmlHelper-Class to assign a value
     */
    public function set_wpml_translation_preference(int $value)
    {
        $this->wpml_preference = $value;
    }
}
