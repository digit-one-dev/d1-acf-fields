<?php

namespace DigitOne\Acf\OptionTraits;


trait OtherChoice {
    /**
     * @param mixed $other_choice
     *
     * @return self the updated instance
     */
    public function other_choice(mixed $other_choice): self
    {
        $this->set_other_choice($other_choice);

        return $this;
    }

    /**
     * @param mixed $other_choice
     */
    public function set_other_choice(mixed $other_choice)
    {
        $this->args['other_choice'] = $other_choice;
    }

    /**
     * @return mixed
     */
    public function get_other_choice(): mixed
    {
        if (array_key_exists('other_choice', $this->args)) {
            return $this->args['other_choice'];
        }
        
        return [];
    }

    public function add_other_choice($key, $value)
    {
        if (array_key_exists('other_choice', $this->args)) {
            $this->args['other_choice'][$key] = $value;
            return $this;
        }

        $this->args['other_choice'] = [
            $key => $value
        ];

        return $this;
    }
}