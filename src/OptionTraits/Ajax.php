<?php

namespace DigitOne\Acf\OptionTraits;


trait Ajax {
    /**
     * @param mixed $ajax
     *
     * @return self the updated instance
     */
    public function ajax(mixed $ajax): self
    {
        $this->set_ajax($ajax);

        return $this;
    }

    /**
     * @param mixed $ajax
     */
    public function set_ajax(mixed $ajax)
    {
        $this->args['ajax'] = $ajax;
    }

    /**
     * @return mixed
     */
    public function get_ajax(): mixed
    {
        if (array_key_exists('ajax', $this->args)) {
            return $this->args['ajax'];
        }
        
        return [];
    }

    public function add_ajax($key, $value)
    {
        if (array_key_exists('ajax', $this->args)) {
            $this->args['ajax'][$key] = $value;
            return $this;
        }

        $this->args['ajax'] = [
            $key => $value
        ];

        return $this;
    }
}