<?php

namespace DigitOne\Acf\OptionTraits;


trait CenterLng {
    /**
     * @param mixed $center_lng
     *
     * @return self the updated instance
     */
    public function center_lng(mixed $center_lng): self
    {
        $this->set_center_lng($center_lng);

        return $this;
    }

    /**
     * @param mixed $center_lng
     */
    public function set_center_lng(mixed $center_lng)
    {
        $this->args['center_lng'] = $center_lng;
    }

    /**
     * @return mixed
     */
    public function get_center_lng(): mixed
    {
        if (array_key_exists('center_lng', $this->args)) {
            return $this->args['center_lng'];
        }
        
        return [];
    }

    public function add_center_lng($key, $value)
    {
        if (array_key_exists('center_lng', $this->args)) {
            $this->args['center_lng'][$key] = $value;
            return $this;
        }

        $this->args['center_lng'] = [
            $key => $value
        ];

        return $this;
    }
}