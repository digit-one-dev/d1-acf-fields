<?php

namespace DigitOne\Acf\OptionTraits;


trait Max {
    /**
     * @param mixed $max
     *
     * @return self the updated instance
     */
    public function max(mixed $max): self
    {
        $this->set_max($max);

        return $this;
    }

    /**
     * @param mixed $max
     */
    public function set_max(mixed $max)
    {
        $this->args['max'] = $max;
    }

    /**
     * @return mixed
     */
    public function get_max(): mixed
    {
        if (array_key_exists('max', $this->args)) {
            return $this->args['max'];
        }
        
        return [];
    }

    public function add_max($key, $value)
    {
        if (array_key_exists('max', $this->args)) {
            $this->args['max'][$key] = $value;
            return $this;
        }

        $this->args['max'] = [
            $key => $value
        ];

        return $this;
    }
}