<?php

namespace DigitOne\Acf\OptionTraits;


trait CenterLat {
    /**
     * @param mixed $center_lat
     *
     * @return self the updated instance
     */
    public function center_lat(mixed $center_lat): self
    {
        $this->set_center_lat($center_lat);

        return $this;
    }

    /**
     * @param mixed $center_lat
     */
    public function set_center_lat(mixed $center_lat)
    {
        $this->args['center_lat'] = $center_lat;
    }

    /**
     * @return mixed
     */
    public function get_center_lat(): mixed
    {
        if (array_key_exists('center_lat', $this->args)) {
            return $this->args['center_lat'];
        }
        
        return [];
    }

    public function add_center_lat($key, $value)
    {
        if (array_key_exists('center_lat', $this->args)) {
            $this->args['center_lat'][$key] = $value;
            return $this;
        }

        $this->args['center_lat'] = [
            $key => $value
        ];

        return $this;
    }
}