<?php

namespace DigitOne\Acf\OptionTraits;


trait Ui {
    /**
     * @param mixed $ui
     *
     * @return self the updated instance
     */
    public function ui(mixed $ui): self
    {
        $this->set_ui($ui);

        return $this;
    }

    /**
     * @param mixed $ui
     */
    public function set_ui(mixed $ui)
    {
        $this->args['ui'] = $ui;
    }

    /**
     * @return mixed
     */
    public function get_ui(): mixed
    {
        if (array_key_exists('ui', $this->args)) {
            return $this->args['ui'];
        }
        
        return [];
    }

    public function add_ui($key, $value)
    {
        if (array_key_exists('ui', $this->args)) {
            $this->args['ui'][$key] = $value;
            return $this;
        }

        $this->args['ui'] = [
            $key => $value
        ];

        return $this;
    }
}