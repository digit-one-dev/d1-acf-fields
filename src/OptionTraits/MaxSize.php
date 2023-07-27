<?php

namespace DigitOne\Acf\OptionTraits;


trait MaxSize {
    /**
     * @param mixed $max_size
     *
     * @return self the updated instance
     */
    public function max_size(mixed $max_size): self
    {
        $this->set_max_size($max_size);

        return $this;
    }

    /**
     * @param mixed $max_size
     */
    public function set_max_size(mixed $max_size)
    {
        $this->args['max_size'] = $max_size;
    }

    /**
     * @return mixed
     */
    public function get_max_size(): mixed
    {
        if (array_key_exists('max_size', $this->args)) {
            return $this->args['max_size'];
        }
        
        return [];
    }

    public function add_max_size($key, $value)
    {
        if (array_key_exists('max_size', $this->args)) {
            $this->args['max_size'][$key] = $value;
            return $this;
        }

        $this->args['max_size'] = [
            $key => $value
        ];

        return $this;
    }
}