<?php

namespace DigitOne\Acf\OptionTraits;


trait DefaultValue {
    /**
     * @param mixed $default_value
     *
     * @return self the updated instance
     */
    public function default_value(mixed $default_value): self
    {
        $this->set_default_value($default_value);

        return $this;
    }

    /**
     * @param mixed $default_value
     */
    public function set_default_value(mixed $default_value)
    {
        $this->args['default_value'] = $default_value;
    }

    /**
     * @return mixed
     */
    public function get_default_value(): mixed
    {
        if (array_key_exists('default_value', $this->args) {
            return $this->args['default_value'];
        }
        
        return null;
    }
}