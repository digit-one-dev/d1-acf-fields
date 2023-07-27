<?php

namespace DigitOne\Acf\OptionTraits;


trait MinWidth {
    /**
     * @param mixed $min_width
     *
     * @return self the updated instance
     */
    public function min_width(mixed $min_width): self
    {
        $this->set_min_width($min_width);

        return $this;
    }

    /**
     * @param mixed $min_width
     */
    public function set_min_width(mixed $min_width)
    {
        $this->args['min_width'] = $min_width;
    }

    /**
     * @return mixed
     */
    public function get_min_width(): mixed
    {
        if (array_key_exists('min_width', $this->args)) {
            return $this->args['min_width'];
        }
        
        return [];
    }

    public function add_min_width($key, $value)
    {
        if (array_key_exists('min_width', $this->args)) {
            $this->args['min_width'][$key] = $value;
            return $this;
        }

        $this->args['min_width'] = [
            $key => $value
        ];

        return $this;
    }
}