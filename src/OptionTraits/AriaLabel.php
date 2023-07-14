<?php

namespace DigitOne\Acf\OptionTraits;


trait AriaLabel {
    /**
     * @param mixed $aria_label
     *
     * @return self the updated instance
     */
    public function aria_label(mixed $aria_label): self
    {
        $this->set_aria_label($aria_label);

        return $this;
    }

    /**
     * @param mixed $aria_label
     */
    public function set_aria_label(mixed $aria_label)
    {
        $this->args['aria_label'] = $aria_label;
    }

    /**
     * @return mixed
     */
    public function get_aria_label(): mixed
    {
        if (array_key_exists('aria_label', $this->args)) {
            return $this->args['aria_label'];
        }
        
        return [];
    }

    public function add_aria_label($key, $value)
    {
        if (array_key_exists('aria_label', $this->args)) {
            $this->args['aria_label'][$key] = $value;
            return $this;
        }

        $this->args['aria_label'] = [
            $key => $value
        ];

        return $this;
    }
}