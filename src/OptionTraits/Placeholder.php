<?php

namespace DigitOne\Acf\OptionTraits;


trait Placeholder {
    /**
     * @param mixed $placeholder
     *
     * @return self the updated instance
     */
    public function placeholder(mixed $placeholder): self
    {
        $this->set_placeholder($placeholder);

        return $this;
    }

    /**
     * @param mixed $placeholder
     */
    public function set_placeholder(mixed $placeholder)
    {
        $this->args['placeholder'] = $placeholder;
    }

    /**
     * @return mixed
     */
    public function get_placeholder(): mixed
    {
        if (array_key_exists('placeholder', $this->args)) {
            return $this->args['placeholder'];
        }
        
        return [];
    }

    public function add_placeholder($key, $value)
    {
        if (array_key_exists('placeholder', $this->args)) {
            $this->args['placeholder'][$key] = $value;
            return $this;
        }

        $this->args['placeholder'] = [
            $key => $value
        ];

        return $this;
    }
}