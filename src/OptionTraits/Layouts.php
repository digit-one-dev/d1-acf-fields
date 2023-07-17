<?php

namespace DigitOne\Acf\OptionTraits;


trait Layouts {
    /**
     * @param mixed $layouts
     *
     * @return self the updated instance
     */
    public function layouts(mixed $layouts): self
    {
        $this->set_layouts($layouts);

        return $this;
    }

    /**
     * @param mixed $layouts
     */
    public function set_layouts(mixed $layouts)
    {
        $this->args['layouts'] = $layouts;
    }

    /**
     * @return mixed
     */
    public function get_layouts(): mixed
    {
        if (array_key_exists('layouts', $this->args)) {
            return $this->args['layouts'];
        }
        
        return [];
    }

    public function add_layouts($key, $value)
    {
        if (array_key_exists('layouts', $this->args)) {
            $this->args['layouts'][$key] = $value;
            return $this;
        }

        $this->args['layouts'] = [
            $key => $value
        ];

        return $this;
    }
}