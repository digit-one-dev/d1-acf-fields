<?php

namespace DigitOne\Acf\OptionTraits;


trait AllowNull {
    /**
     * @param mixed $allow_null
     *
     * @return self the updated instance
     */
    public function allow_null(mixed $allow_null): self
    {
        $this->set_allow_null($allow_null);

        return $this;
    }

    /**
     * @param mixed $allow_null
     */
    public function set_allow_null(mixed $allow_null)
    {
        $this->args['allow_null'] = $allow_null;
    }

    /**
     * @return mixed
     */
    public function get_allow_null(): mixed
    {
        if (array_key_exists('allow_null', $this->args)) {
            return $this->args['allow_null'];
        }
        
        return [];
    }

    public function add_allow_null($key, $value)
    {
        if (array_key_exists('allow_null', $this->args)) {
            $this->args['allow_null'][$key] = $value;
            return $this;
        }

        $this->args['allow_null'] = [
            $key => $value
        ];

        return $this;
    }
}