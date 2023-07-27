<?php

namespace DigitOne\Acf\OptionTraits;


trait Height {
    /**
     * @param mixed $height
     *
     * @return self the updated instance
     */
    public function height(mixed $height): self
    {
        $this->set_height($height);

        return $this;
    }

    /**
     * @param mixed $height
     */
    public function set_height(mixed $height)
    {
        $this->args['height'] = $height;
    }

    /**
     * @return mixed
     */
    public function get_height(): mixed
    {
        if (array_key_exists('height', $this->args)) {
            return $this->args['height'];
        }
        
        return [];
    }

    public function add_height($key, $value)
    {
        if (array_key_exists('height', $this->args)) {
            $this->args['height'][$key] = $value;
            return $this;
        }

        $this->args['height'] = [
            $key => $value
        ];

        return $this;
    }
}