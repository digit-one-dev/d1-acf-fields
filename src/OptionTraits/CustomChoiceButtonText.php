<?php

namespace DigitOne\Acf\OptionTraits;


trait CustomChoiceButtonText {
    /**
     * @param mixed $custom_choice_button_text
     *
     * @return self the updated instance
     */
    public function custom_choice_button_text(mixed $custom_choice_button_text): self
    {
        $this->set_custom_choice_button_text($custom_choice_button_text);

        return $this;
    }

    /**
     * @param mixed $custom_choice_button_text
     */
    public function set_custom_choice_button_text(mixed $custom_choice_button_text)
    {
        $this->args['custom_choice_button_text'] = $custom_choice_button_text;
    }

    /**
     * @return mixed
     */
    public function get_custom_choice_button_text(): mixed
    {
        if (array_key_exists('custom_choice_button_text', $this->args)) {
            return $this->args['custom_choice_button_text'];
        }
        
        return [];
    }

    public function add_custom_choice_button_text($key, $value)
    {
        if (array_key_exists('custom_choice_button_text', $this->args)) {
            $this->args['custom_choice_button_text'][$key] = $value;
            return $this;
        }

        $this->args['custom_choice_button_text'] = [
            $key => $value
        ];

        return $this;
    }
}