<?php

namespace DigitOne\Acf\OptionTraits;


trait PrefixName {
    /**
     * @param mixed $prefix_name
     *
     * @return self the updated instance
     */
    public function prefix_name(mixed $prefix_name): self
    {
        $this->set_prefix_name($prefix_name);

        return $this;
    }

    /**
     * @param mixed $prefix_name
     */
    public function set_prefix_name(mixed $prefix_name)
    {
        $this->args['prefix_name'] = $prefix_name;
    }

    /**
     * @return mixed
     */
    public function get_prefix_name(): mixed
    {
        if (array_key_exists('prefix_name', $this->args)) {
            return $this->args['prefix_name'];
        }
        
        return [];
    }

    public function add_prefix_name($key, $value)
    {
        if (array_key_exists('prefix_name', $this->args)) {
            $this->args['prefix_name'][$key] = $value;
            return $this;
        }

        $this->args['prefix_name'] = [
            $key => $value
        ];

        return $this;
    }
}