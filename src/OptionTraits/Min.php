<?php

namespace DigitOne\Acf\OptionTraits;


trait Min {
    /**
     * @param mixed $min
     *
     * @return self the updated instance
     */
    public function min(mixed $min): self
    {
        $this->set_min($min);

        return $this;
    }

    /**
     * @param mixed $min
     */
    public function set_min(mixed $min)
    {
        $this->args['min'] = $min;
    }

    /**
     * @return mixed
     */
    public function get_min(): mixed
    {
        if (array_key_exists('min', $this->args)) {
            return $this->args['min'];
        }
        
        return [];
    }

    public function add_min($key, $value)
    {
        if (array_key_exists('min', $this->args)) {
            $this->args['min'][$key] = $value;
            return $this;
        }

        $this->args['min'] = [
            $key => $value
        ];

        return $this;
    }
}