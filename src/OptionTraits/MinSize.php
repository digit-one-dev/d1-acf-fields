<?php

namespace DigitOne\Acf\OptionTraits;


trait MinSize {
    /**
     * @param mixed $min_size
     *
     * @return self the updated instance
     */
    public function min_size(mixed $min_size): self
    {
        $this->set_min_size($min_size);

        return $this;
    }

    /**
     * @param mixed $min_size
     */
    public function set_min_size(mixed $min_size)
    {
        $this->args['min_size'] = $min_size;
    }

    /**
     * @return mixed
     */
    public function get_min_size(): mixed
    {
        if (array_key_exists('min_size', $this->args)) {
            return $this->args['min_size'];
        }
        
        return [];
    }

    public function add_min_size($key, $value)
    {
        if (array_key_exists('min_size', $this->args)) {
            $this->args['min_size'][$key] = $value;
            return $this;
        }

        $this->args['min_size'] = [
            $key => $value
        ];

        return $this;
    }
}