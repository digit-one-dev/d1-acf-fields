<?php

namespace DigitOne\Acf\OptionTraits;


trait UiOnText {
    /**
     * @param mixed $ui_on_text
     *
     * @return self the updated instance
     */
    public function ui_on_text(mixed $ui_on_text): self
    {
        $this->set_ui_on_text($ui_on_text);

        return $this;
    }

    /**
     * @param mixed $ui_on_text
     */
    public function set_ui_on_text(mixed $ui_on_text)
    {
        $this->args['ui_on_text'] = $ui_on_text;
    }

    /**
     * @return mixed
     */
    public function get_ui_on_text(): mixed
    {
        if (array_key_exists('ui_on_text', $this->args)) {
            return $this->args['ui_on_text'];
        }
        
        return [];
    }

    public function add_ui_on_text($key, $value)
    {
        if (array_key_exists('ui_on_text', $this->args)) {
            $this->args['ui_on_text'][$key] = $value;
            return $this;
        }

        $this->args['ui_on_text'] = [
            $key => $value
        ];

        return $this;
    }
}