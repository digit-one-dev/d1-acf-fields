<?php

namespace DigitOne\Acf\OptionTraits;


trait Append {
    /**
     * @param mixed $append
     *
     * @return self the updated instance
     */
    public function append(mixed $append): self
    {
        $this->set_append($append);

        return $this;
    }

    /**
     * @param mixed $append
     */
    public function set_append(mixed $append)
    {
        $this->args['append'] = $append;
    }

    /**
     * @return mixed
     */
    public function get_append(): mixed
    {
        if (array_key_exists('append', $this->args)) {
            return $this->args['append'];
        }
        
        return [];
    }

    public function add_append($key, $value)
    {
        if (array_key_exists('append', $this->args)) {
            $this->args['append'][$key] = $value;
            return $this;
        }

        $this->args['append'] = [
            $key => $value
        ];

        return $this;
    }
}