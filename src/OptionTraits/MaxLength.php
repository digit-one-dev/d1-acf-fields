<?php

namespace DigitOne\Acf\OptionTraits;


trait MaxLength {
    /**
     * @param mixed $maxlength
     *
     * @return self the updated instance
     */
    public function maxlength(mixed $maxlength): self
    {
        $this->set_maxlength($maxlength);

        return $this;
    }

    /**
     * @param mixed $maxlength
     */
    public function set_maxlength(mixed $maxlength)
    {
        $this->args['maxlength'] = $maxlength;
    }

    /**
     * @return mixed
     */
    public function get_maxlength(): mixed
    {
        if (array_key_exists('maxlength', $this->args)) {
            return $this->args['maxlength'];
        }
        
        return [];
    }

    public function add_maxlength($key, $value)
    {
        if (array_key_exists('maxlength', $this->args)) {
            $this->args['maxlength'][$key] = $value;
            return $this;
        }

        $this->args['maxlength'] = [
            $key => $value
        ];

        return $this;
    }
}