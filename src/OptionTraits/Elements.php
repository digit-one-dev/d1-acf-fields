<?php

namespace DigitOne\Acf\OptionTraits;


trait Elements {
    /**
     * @param mixed $elements
     *
     * @return self the updated instance
     */
    public function elements(mixed $elements): self
    {
        $this->set_elements($elements);

        return $this;
    }

    /**
     * @param mixed $elements
     */
    public function set_elements(mixed $elements)
    {
        $this->args['elements'] = $elements;
    }

    /**
     * @return mixed
     */
    public function get_elements(): mixed
    {
        if (array_key_exists('elements', $this->args)) {
            return $this->args['elements'];
        }
        
        return [];
    }

    public function add_elements($key, $value)
    {
        if (array_key_exists('elements', $this->args)) {
            $this->args['elements'][$key] = $value;
            return $this;
        }

        $this->args['elements'] = [
            $key => $value
        ];

        return $this;
    }
}