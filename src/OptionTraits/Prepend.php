<?php

namespace DigitOne\Acf\OptionTraits;


trait Prepend {
    /**
     * @param mixed $prepend
     *
     * @return self the updated instance
     */
    public function prepend(mixed $prepend): self
    {
        $this->set_prepend($prepend);

        return $this;
    }

    /**
     * @param mixed $prepend
     */
    public function set_prepend(mixed $prepend)
    {
        $this->args['prepend'] = $prepend;
    }

    /**
     * @return mixed
     */
    public function get_prepend(): mixed
    {
        if (array_key_exists('prepend', $this->args)) {
            return $this->args['prepend'];
        }
        
        return [];
    }

    public function add_prepend($key, $value)
    {
        if (array_key_exists('prepend', $this->args)) {
            $this->args['prepend'][$key] = $value;
            return $this;
        }

        $this->args['prepend'] = [
            $key => $value
        ];

        return $this;
    }
}