<?php

namespace DigitOne\Acf\OptionTraits;


trait Placement {
    /**
     * @param mixed $placement
     *
     * @return self the updated instance
     */
    public function placement(mixed $placement): self
    {
        $this->set_placement($placement);

        return $this;
    }

    /**
     * @param mixed $placement
     */
    public function set_placement(mixed $placement)
    {
        $this->args['placement'] = $placement;
    }

    /**
     * @return mixed
     */
    public function get_placement(): mixed
    {
        if (array_key_exists('placement', $this->args)) {
            return $this->args['placement'];
        }
        
        return [];
    }

    public function add_placement($key, $value)
    {
        if (array_key_exists('placement', $this->args)) {
            $this->args['placement'][$key] = $value;
            return $this;
        }

        $this->args['placement'] = [
            $key => $value
        ];

        return $this;
    }
}