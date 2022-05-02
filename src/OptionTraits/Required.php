<?php

namespace DigitOne\Acf\OptionTraits;


trait Required {
    /**
     * @return the updated instance
     */
    public function required()
    {
        $this->set_required(true);

        return $this;
    }

    /**
     * @param $required
     */
    public function set_required($required)
    {
        $this->args['required'] = $required;
    }

    /**
     * @return Boolean
     */
    public function is_required()
    {
        return $this->args['required'];
    }
}