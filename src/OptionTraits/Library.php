<?php

namespace DigitOne\Acf\OptionTraits;


trait Library {
    /**
     * @param mixed $library
     *
     * @return self the updated instance
     */
    public function library(mixed $library): self
    {
        $this->set_library($library);

        return $this;
    }

    /**
     * @param mixed $library
     */
    public function set_library(mixed $library)
    {
        $this->args['library'] = $library;
    }

    /**
     * @return mixed
     */
    public function get_library(): mixed
    {
        if (array_key_exists('library', $this->args)) {
            return $this->args['library'];
        }
        
        return [];
    }

    public function add_library($key, $value)
    {
        if (array_key_exists('library', $this->args)) {
            $this->args['library'][$key] = $value;
            return $this;
        }

        $this->args['library'] = [
            $key => $value
        ];

        return $this;
    }
}