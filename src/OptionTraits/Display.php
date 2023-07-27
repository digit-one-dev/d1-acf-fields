<?php

namespace DigitOne\Acf\OptionTraits;


trait Display {
    /**
     * @param mixed $display
     *
     * @return self the updated instance
     */
    public function display(mixed $display): self
    {
        $this->set_display($display);

        return $this;
    }

    /**
     * @param mixed $display
     */
    public function set_display(mixed $display)
    {
        $this->args['display'] = $display;
    }

    /**
     * @return mixed
     */
    public function get_display(): mixed
    {
        if (array_key_exists('display', $this->args)) {
            return $this->args['display'];
        }
        
        return [];
    }

    public function add_display($key, $value)
    {
        if (array_key_exists('display', $this->args)) {
            $this->args['display'][$key] = $value;
            return $this;
        }

        $this->args['display'] = [
            $key => $value
        ];

        return $this;
    }
}