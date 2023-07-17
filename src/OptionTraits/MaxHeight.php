<?php

namespace DigitOne\Acf\OptionTraits;


trait MaxHeight {
    /**
     * @param mixed $max_height
     *
     * @return self the updated instance
     */
    public function max_height(mixed $max_height): self
    {
        $this->set_max_height($max_height);

        return $this;
    }

    /**
     * @param mixed $max_height
     */
    public function set_max_height(mixed $max_height)
    {
        $this->args['max_height'] = $max_height;
    }

    /**
     * @return mixed
     */
    public function get_max_height(): mixed
    {
        if (array_key_exists('max_height', $this->args)) {
            return $this->args['max_height'];
        }
        
        return [];
    }

    public function add_max_height($key, $value)
    {
        if (array_key_exists('max_height', $this->args)) {
            $this->args['max_height'][$key] = $value;
            return $this;
        }

        $this->args['max_height'] = [
            $key => $value
        ];

        return $this;
    }
}