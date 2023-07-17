<?php

namespace DigitOne\Acf\OptionTraits;


trait SaveCustom {
    /**
     * @param mixed $save_custom
     *
     * @return self the updated instance
     */
    public function save_custom(mixed $save_custom): self
    {
        $this->set_save_custom($save_custom);

        return $this;
    }

    /**
     * @param mixed $save_custom
     */
    public function set_save_custom(mixed $save_custom)
    {
        $this->args['save_custom'] = $save_custom;
    }

    /**
     * @return mixed
     */
    public function get_save_custom(): mixed
    {
        if (array_key_exists('save_custom', $this->args)) {
            return $this->args['save_custom'];
        }
        
        return [];
    }

    public function add_save_custom($key, $value)
    {
        if (array_key_exists('save_custom', $this->args)) {
            $this->args['save_custom'][$key] = $value;
            return $this;
        }

        $this->args['save_custom'] = [
            $key => $value
        ];

        return $this;
    }
}