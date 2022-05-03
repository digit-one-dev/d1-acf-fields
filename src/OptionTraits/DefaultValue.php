<?php

namespace DigitOne\Acf\OptionTraits;


trait DefaultValue {
    /**
     * @param $default_value
     *
     * @return the updated instance
     */
    public function default_value($default_value)
    {
        $this->set_default_value($default_value);

        return $this;
    }

    /**
     * @param $default_value
     */
    public function set_default_value($default_value)
    {
        $this->args['default_value'] = $default_value;
    }

    /**
     * @return String
     */
    public function get_default_value()
    {
        return $this->args['default_value'];
    }
}