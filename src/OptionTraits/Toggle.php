<?php

namespace DigitOne\Acf\OptionTraits;


trait Toggle {
    /**
     * @param mixed $toggle
     *
     * @return self the updated instance
     */
    public function toggle(mixed $toggle): self
    {
        $this->set_toggle($toggle);

        return $this;
    }

    /**
     * @param mixed $toggle
     */
    public function set_toggle(mixed $toggle)
    {
        $this->args['toggle'] = $toggle;
    }

    /**
     * @return mixed
     */
    public function get_toggle(): mixed
    {
        if (array_key_exists('toggle', $this->args)) {
            return $this->args['toggle'];
        }
        
        return [];
    }

    public function add_toggle($key, $value)
    {
        if (array_key_exists('toggle', $this->args)) {
            $this->args['toggle'][$key] = $value;
            return $this;
        }

        $this->args['toggle'] = [
            $key => $value
        ];

        return $this;
    }
}