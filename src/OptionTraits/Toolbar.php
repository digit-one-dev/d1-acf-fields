<?php

namespace DigitOne\Acf\OptionTraits;


trait Toolbar {
    /**
     * @param mixed $toolbar
     *
     * @return self the updated instance
     */
    public function toolbar(mixed $toolbar): self
    {
        $this->set_toolbar($toolbar);

        return $this;
    }

    /**
     * @param mixed $toolbar
     */
    public function set_toolbar(mixed $toolbar)
    {
        $this->args['toolbar'] = $toolbar;
    }

    /**
     * @return mixed
     */
    public function get_toolbar(): mixed
    {
        if (array_key_exists('toolbar', $this->args)) {
            return $this->args['toolbar'];
        }
        
        return [];
    }

    public function add_toolbar($key, $value)
    {
        if (array_key_exists('toolbar', $this->args)) {
            $this->args['toolbar'][$key] = $value;
            return $this;
        }

        $this->args['toolbar'] = [
            $key => $value
        ];

        return $this;
    }
}