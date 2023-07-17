<?php

namespace DigitOne\Acf\OptionTraits;


trait Width {
    /**
     * @param mixed $width
     *
     * @return self the updated instance
     */
    public function width(mixed $width): self
    {
        $this->set_width($width);

        return $this;
    }

    /**
     * @param mixed $width
     */
    public function set_width(mixed $width)
    {
        $this->args['width'] = $width;
    }

    /**
     * @return mixed
     */
    public function get_width(): mixed
    {
        if (array_key_exists('width', $this->args)) {
            return $this->args['width'];
        }
        
        return [];
    }

    public function add_width($key, $value)
    {
        if (array_key_exists('width', $this->args)) {
            $this->args['width'][$key] = $value;
            return $this;
        }

        $this->args['width'] = [
            $key => $value
        ];

        return $this;
    }
}