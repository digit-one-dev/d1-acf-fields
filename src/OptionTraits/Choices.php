<?php

namespace DigitOne\Acf\OptionTraits;


trait Choices {
    /**
     * @param mixed $choices
     *
     * @return self the updated instance
     */
    public function choices(mixed $choices): self
    {
        $this->set_choices($choices);

        return $this;
    }

    /**
     * @param mixed $choices
     */
    public function set_choices(mixed $choices)
    {
        $this->args['choices'] = $choices;
    }

    /**
     * @return mixed
     */
    public function get_choices(): mixed
    {
        if (array_key_exists('choices', $this->args)) {
            return $this->args['choices'];
        }
        
        return [];
    }

    public function add_choice($key, $value)
    {
        if (array_key_exists('choices', $this->args)) {
            $this->args['choices'][$key] = $value;
            return $this;
        }

        $this->args['choices'] = [
            $key => $value
        ];

        return $this;
    }
}