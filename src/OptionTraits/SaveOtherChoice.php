<?php

namespace DigitOne\Acf\OptionTraits;


trait SaveOtherChoice {
    /**
     * @param mixed $save_other_choice
     *
     * @return self the updated instance
     */
    public function save_other_choice(mixed $save_other_choice): self
    {
        $this->set_save_other_choice($save_other_choice);

        return $this;
    }

    /**
     * @param mixed $save_other_choice
     */
    public function set_save_other_choice(mixed $save_other_choice)
    {
        $this->args['save_other_choice'] = $save_other_choice;
    }

    /**
     * @return mixed
     */
    public function get_save_other_choice(): mixed
    {
        if (array_key_exists('save_other_choice', $this->args)) {
            return $this->args['save_other_choice'];
        }
        
        return [];
    }

    public function add_save_other_choice($key, $value)
    {
        if (array_key_exists('save_other_choice', $this->args)) {
            $this->args['save_other_choice'][$key] = $value;
            return $this;
        }

        $this->args['save_other_choice'] = [
            $key => $value
        ];

        return $this;
    }
}