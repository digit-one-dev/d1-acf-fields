<?php

namespace DigitOne\Acf\OptionTraits;


trait LoadTerms {
    /**
     * @param mixed $load_terms
     *
     * @return self the updated instance
     */
    public function load_terms(mixed $load_terms): self
    {
        $this->set_load_terms($load_terms);

        return $this;
    }

    /**
     * @param mixed $load_terms
     */
    public function set_load_terms(mixed $load_terms)
    {
        $this->args['load_terms'] = $load_terms;
    }

    /**
     * @return mixed
     */
    public function get_load_terms(): mixed
    {
        if (array_key_exists('load_terms', $this->args)) {
            return $this->args['load_terms'];
        }
        
        return [];
    }

    public function add_load_terms($key, $value)
    {
        if (array_key_exists('load_terms', $this->args)) {
            $this->args['load_terms'][$key] = $value;
            return $this;
        }

        $this->args['load_terms'] = [
            $key => $value
        ];

        return $this;
    }
}