<?php

namespace DigitOne\Acf\OptionTraits;


trait AllowCustum {
    /**
     * @param mixed $allow_custom
     *
     * @return self the updated instance
     */
    public function allow_custom(mixed $allow_custom): self
    {
        $this->set_allow_custom($allow_custom);

        return $this;
    }

    /**
     * @param mixed $allow_custom
     */
    public function set_allow_custom(mixed $allow_custom)
    {
        $this->args['allow_custom'] = $allow_custom;
    }

    /**
     * @return mixed
     */
    public function get_allow_custom(): mixed
    {
        if (array_key_exists('allow_custom', $this->args)) {
            return $this->args['allow_custom'];
        }
        
        return [];
    }

    public function add_allow_custom($key, $value)
    {
        if (array_key_exists('allow_custom', $this->args)) {
            $this->args['allow_custom'][$key] = $value;
            return $this;
        }

        $this->args['allow_custom'] = [
            $key => $value
        ];

        return $this;
    }
}