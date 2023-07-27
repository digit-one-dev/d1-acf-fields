<?php

namespace DigitOne\Acf\OptionTraits;


trait CloneOption {
    /**
     * @param mixed $clone
     *
     * @return self the updated instance
     */
    public function clone(mixed $clone): self
    {
        $this->set_clone($clone);

        return $this;
    }

    /**
     * @param mixed $clone
     */
    public function set_clone(mixed $clone)
    {
        $this->args['clone'] = $clone;
    }

    /**
     * @return mixed
     */
    public function get_clone(): mixed
    {
        if (array_key_exists('clone', $this->args)) {
            return $this->args['clone'];
        }
        
        return [];
    }

    public function add_clone($key, $value)
    {
        if (array_key_exists('clone', $this->args)) {
            $this->args['clone'][$key] = $value;
            return $this;
        }

        $this->args['clone'] = [
            $key => $value
        ];

        return $this;
    }
}