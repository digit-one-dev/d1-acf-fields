<?php

namespace DigitOne\Acf\OptionTraits;


trait Tabs {
    /**
     * @param mixed $tabs
     *
     * @return self the updated instance
     */
    public function tabs(mixed $tabs): self
    {
        $this->set_tabs($tabs);

        return $this;
    }

    /**
     * @param mixed $tabs
     */
    public function set_tabs(mixed $tabs)
    {
        $this->args['tabs'] = $tabs;
    }

    /**
     * @return mixed
     */
    public function get_tabs(): mixed
    {
        if (array_key_exists('tabs', $this->args)) {
            return $this->args['tabs'];
        }
        
        return [];
    }

    public function add_tabs($key, $value)
    {
        if (array_key_exists('tabs', $this->args)) {
            $this->args['tabs'][$key] = $value;
            return $this;
        }

        $this->args['tabs'] = [
            $key => $value
        ];

        return $this;
    }
}