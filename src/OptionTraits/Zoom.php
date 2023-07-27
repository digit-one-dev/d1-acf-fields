<?php

namespace DigitOne\Acf\OptionTraits;


trait Zoom {
    /**
     * @param mixed $zoom
     *
     * @return self the updated instance
     */
    public function zoom(mixed $zoom): self
    {
        $this->set_zoom($zoom);

        return $this;
    }

    /**
     * @param mixed $zoom
     */
    public function set_zoom(mixed $zoom)
    {
        $this->args['zoom'] = $zoom;
    }

    /**
     * @return mixed
     */
    public function get_zoom(): mixed
    {
        if (array_key_exists('zoom', $this->args)) {
            return $this->args['zoom'];
        }
        
        return [];
    }

    public function add_zoom($key, $value)
    {
        if (array_key_exists('zoom', $this->args)) {
            $this->args['zoom'][$key] = $value;
            return $this;
        }

        $this->args['zoom'] = [
            $key => $value
        ];

        return $this;
    }
}