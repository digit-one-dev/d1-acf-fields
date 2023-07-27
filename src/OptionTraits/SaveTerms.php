<?php

namespace DigitOne\Acf\OptionTraits;


trait SaveTerms {
    /**
     * @param mixed $save_terms
     *
     * @return self the updated instance
     */
    public function save_terms(mixed $save_terms): self
    {
        $this->set_save_terms($save_terms);

        return $this;
    }

    /**
     * @param mixed $save_terms
     */
    public function set_save_terms(mixed $save_terms)
    {
        $this->args['save_terms'] = $save_terms;
    }

    /**
     * @return mixed
     */
    public function get_save_terms(): mixed
    {
        if (array_key_exists('save_terms', $this->args)) {
            return $this->args['save_terms'];
        }
        
        return [];
    }

    public function add_save_terms($key, $value)
    {
        if (array_key_exists('save_terms', $this->args)) {
            $this->args['save_terms'][$key] = $value;
            return $this;
        }

        $this->args['save_terms'] = [
            $key => $value
        ];

        return $this;
    }
}