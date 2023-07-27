<?php

namespace DigitOne\Acf\OptionTraits;


trait ReturnFormat {
    /**
     * @return self the updated instance
     */
    public function return_format(): self
    {
        $this->set_return_format(true);

        return $this;
    }

    /**
     * @param bool $return_format
     */
    public function set_return_format(bool $return_format)
    {
        $this->args['return_format'] = $return_format;
    }

    /**
     * @return bool
     */
    public function is_return_format(): ?bool
    {
        if (array_key_exists('return_format', $this->args)) {
            return $this->args['return_format'];
        }

        return false;
    }
}