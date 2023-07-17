<?php

namespace DigitOne\Acf\OptionTraits;


trait Message {
    /**
     * @param mixed $message
     *
     * @return self the updated instance
     */
    public function message(mixed $message): self
    {
        $this->set_message($message);

        return $this;
    }

    /**
     * @param mixed $message
     */
    public function set_message(mixed $message)
    {
        $this->args['message'] = $message;
    }

    /**
     * @return mixed
     */
    public function get_message(): mixed
    {
        if (array_key_exists('message', $this->args)) {
            return $this->args['message'];
        }
        
        return [];
    }

    public function add_message($key, $value)
    {
        if (array_key_exists('message', $this->args)) {
            $this->args['message'][$key] = $value;
            return $this;
        }

        $this->args['message'] = [
            $key => $value
        ];

        return $this;
    }
}