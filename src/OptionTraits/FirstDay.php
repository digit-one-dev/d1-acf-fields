<?php

namespace DigitOne\Acf\OptionTraits;


trait FirstDay {
    /**
     * @param mixed $first_day
     *
     * @return self the updated instance
     */
    public function first_day(mixed $first_day): self
    {
        $this->set_first_day($first_day);

        return $this;
    }

    /**
     * @param mixed $first_day
     */
    public function set_first_day(mixed $first_day)
    {
        $this->args['first_day'] = $first_day;
    }

    /**
     * @return mixed
     */
    public function get_first_day(): mixed
    {
        if (array_key_exists('first_day', $this->args)) {
            return $this->args['first_day'];
        }
        
        return [];
    }

    public function add_first_day($key, $value)
    {
        if (array_key_exists('first_day', $this->args)) {
            $this->args['first_day'][$key] = $value;
            return $this;
        }

        $this->args['first_day'] = [
            $key => $value
        ];

        return $this;
    }
}