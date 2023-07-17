<?php

namespace DigitOne\Acf\OptionTraits;


trait Open {
    /**
     * @param mixed $open
     *
     * @return self the updated instance
     */
    public function open(mixed $open): self
    {
        $this->set_open($open);

        return $this;
    }

    /**
     * @param mixed $open
     */
    public function set_open(mixed $open)
    {
        $this->args['open'] = $open;
    }

    /**
     * @return mixed
     */
    public function get_open(): mixed
    {
        if (array_key_exists('open', $this->args)) {
            return $this->args['open'];
        }
        
        return [];
    }

    public function add_open($key, $value)
    {
        if (array_key_exists('open', $this->args)) {
            $this->args['open'][$key] = $value;
            return $this;
        }

        $this->args['open'] = [
            $key => $value
        ];

        return $this;
    }
}