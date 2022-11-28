<?php

namespace DigitOne\Acf\OptionTraits;


trait Multiple {
    /**
     * @return self the updated instance
     */
    public function multiple(): self
    {
        $this->set_multiple(true);

        return $this;
    }

    /**
     * @param bool $multiple
     */
    public function set_multiple(bool $multiple)
    {
        $this->args['multiple'] = $multiple;
    }

    /**
     * @return bool
     */
    public function is_multiple(): ?bool
    {
        if (array_key_exists('multiple', $this->args)) {
            return $this->args['multiple'];
        }

        return false;
    }
}