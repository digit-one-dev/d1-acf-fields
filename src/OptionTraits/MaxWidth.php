<?php

namespace DigitOne\Acf\OptionTraits;


trait MaxWidth {
    /**
     * @param mixed $maxwidth
     *
     * @return self the updated instance
     */
    public function maxwidth(mixed $maxwidth): self
    {
        $this->set_maxwidth($maxwidth);

        return $this;
    }

    /**
     * @param mixed $maxwidth
     */
    public function set_maxwidth(mixed $maxwidth)
    {
        $this->args['maxwidth'] = $maxwidth;
    }

    /**
     * @return mixed
     */
    public function get_maxwidth(): mixed
    {
        if (array_key_exists('maxwidth', $this->args)) {
            return $this->args['maxwidth'];
        }
        
        return [];
    }

    public function add_maxwidth($key, $value)
    {
        if (array_key_exists('maxwidth', $this->args)) {
            $this->args['maxwidth'][$key] = $value;
            return $this;
        }

        $this->args['maxwidth'] = [
            $key => $value
        ];

        return $this;
    }
}