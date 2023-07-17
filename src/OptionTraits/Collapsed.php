<?php

namespace DigitOne\Acf\OptionTraits;


trait Collapsed {
    /**
     * @param mixed $collapsed
     *
     * @return self the updated instance
     */
    public function collapsed(mixed $collapsed): self
    {
        $this->set_collapsed($collapsed);

        return $this;
    }

    /**
     * @param mixed $collapsed
     */
    public function set_collapsed(mixed $collapsed)
    {
        $this->args['collapsed'] = $collapsed;
    }

    /**
     * @return mixed
     */
    public function get_collapsed(): mixed
    {
        if (array_key_exists('collapsed', $this->args)) {
            return $this->args['collapsed'];
        }
        
        return [];
    }

    public function add_collapsed($key, $value)
    {
        if (array_key_exists('collapsed', $this->args)) {
            $this->args['collapsed'][$key] = $value;
            return $this;
        }

        $this->args['collapsed'] = [
            $key => $value
        ];

        return $this;
    }
}