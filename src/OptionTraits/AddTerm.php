<?php

namespace DigitOne\Acf\OptionTraits;


trait AddTerm {
    /**
     * @param mixed $add_term
     *
     * @return self the updated instance
     */
    public function add_term(mixed $add_term): self
    {
        $this->set_add_term($add_term);

        return $this;
    }

    /**
     * @param mixed $add_term
     */
    public function set_add_term(mixed $add_term)
    {
        $this->args['add_term'] = $add_term;
    }

    /**
     * @return mixed
     */
    public function get_add_term(): mixed
    {
        if (array_key_exists('add_term', $this->args)) {
            return $this->args['add_term'];
        }
        
        return [];
    }

    public function add_add_term($key, $value)
    {
        if (array_key_exists('add_term', $this->args)) {
            $this->args['add_term'][$key] = $value;
            return $this;
        }

        $this->args['add_term'] = [
            $key => $value
        ];

        return $this;
    }
}