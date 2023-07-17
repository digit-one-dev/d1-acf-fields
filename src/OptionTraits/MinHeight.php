<?php

namespace DigitOne\Acf\OptionTraits;


trait MinHeight {
    /**
     * @param mixed $min_height
     *
     * @return self the updated instance
     */
    public function min_height(mixed $min_height): self
    {
        $this->set_min_height($min_height);

        return $this;
    }

    /**
     * @param mixed $min_height
     */
    public function set_min_height(mixed $min_height)
    {
        $this->args['min_height'] = $min_height;
    }

    /**
     * @return mixed
     */
    public function get_min_height(): mixed
    {
        if (array_key_exists('min_height', $this->args)) {
            return $this->args['min_height'];
        }
        
        return [];
    }

    public function add_min_height($key, $value)
    {
        if (array_key_exists('min_height', $this->args)) {
            $this->args['min_height'][$key] = $value;
            return $this;
        }

        $this->args['min_height'] = [
            $key => $value
        ];

        return $this;
    }
}