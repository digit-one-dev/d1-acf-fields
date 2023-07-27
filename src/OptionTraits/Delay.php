<?php

namespace DigitOne\Acf\OptionTraits;


trait Delay {
    /**
     * @param mixed $delay
     *
     * @return self the updated instance
     */
    public function delay(mixed $delay): self
    {
        $this->set_delay($delay);

        return $this;
    }

    /**
     * @param mixed $delay
     */
    public function set_delay(mixed $delay)
    {
        $this->args['delay'] = $delay;
    }

    /**
     * @return mixed
     */
    public function get_delay(): mixed
    {
        if (array_key_exists('delay', $this->args)) {
            return $this->args['delay'];
        }
        
        return [];
    }

    public function add_delay($key, $value)
    {
        if (array_key_exists('delay', $this->args)) {
            $this->args['delay'][$key] = $value;
            return $this;
        }

        $this->args['delay'] = [
            $key => $value
        ];

        return $this;
    }
}