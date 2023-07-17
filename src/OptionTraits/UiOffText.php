<?php

namespace DigitOne\Acf\OptionTraits;


trait UiOffText {
    /**
     * @param mixed $ui_off_text
     *
     * @return self the updated instance
     */
    public function ui_off_text(mixed $ui_off_text): self
    {
        $this->set_ui_off_text($ui_off_text);

        return $this;
    }

    /**
     * @param mixed $ui_off_text
     */
    public function set_ui_off_text(mixed $ui_off_text)
    {
        $this->args['ui_off_text'] = $ui_off_text;
    }

    /**
     * @return mixed
     */
    public function get_ui_off_text(): mixed
    {
        if (array_key_exists('ui_off_text', $this->args)) {
            return $this->args['ui_off_text'];
        }
        
        return [];
    }

    public function add_ui_off_text($key, $value)
    {
        if (array_key_exists('ui_off_text', $this->args)) {
            $this->args['ui_off_text'][$key] = $value;
            return $this;
        }

        $this->args['ui_off_text'] = [
            $key => $value
        ];

        return $this;
    }
}