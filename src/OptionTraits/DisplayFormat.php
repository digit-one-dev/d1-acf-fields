<?php

namespace DigitOne\Acf\OptionTraits;


trait DisplayFormat {
    /**
     * @param mixed $display_format
     *
     * @return self the updated instance
     */
    public function display_format(mixed $display_format): self
    {
        $this->set_display_format($display_format);

        return $this;
    }

    /**
     * @param mixed $display_format
     */
    public function set_display_format(mixed $display_format)
    {
        $this->args['display_format'] = $display_format;
    }

    /**
     * @return mixed
     */
    public function get_display_format(): mixed
    {
        if (array_key_exists('display_format', $this->args)) {
            return $this->args['display_format'];
        }
        
        return [];
    }

    public function add_display_format($key, $value)
    {
        if (array_key_exists('display_format', $this->args)) {
            $this->args['display_format'][$key] = $value;
            return $this;
        }

        $this->args['display_format'] = [
            $key => $value
        ];

        return $this;
    }
}