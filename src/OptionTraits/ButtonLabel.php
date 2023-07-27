<?php

namespace DigitOne\Acf\OptionTraits;


trait ButtonLabel {
    /**
     * @param mixed $button_label
     *
     * @return self the updated instance
     */
    public function button_label(mixed $button_label): self
    {
        $this->set_button_label($button_label);

        return $this;
    }

    /**
     * @param mixed $button_label
     */
    public function set_button_label(mixed $button_label)
    {
        $this->args['button_label'] = $button_label;
    }

    /**
     * @return mixed
     */
    public function get_button_label(): mixed
    {
        if (array_key_exists('button_label', $this->args)) {
            return $this->args['button_label'];
        }
        
        return [];
    }

    public function add_button_label($key, $value)
    {
        if (array_key_exists('button_label', $this->args)) {
            $this->args['button_label'][$key] = $value;
            return $this;
        }

        $this->args['button_label'] = [
            $key => $value
        ];

        return $this;
    }
}