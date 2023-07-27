<?php

namespace DigitOne\Acf\OptionTraits;


trait Layout {
    /**
     * @param mixed $layout
     *
     * @return self the updated instance
     */
    public function layout(mixed $layout): self
    {
        $this->set_layout($layout);

        return $this;
    }

    /**
     * @param mixed $layout
     */
    public function set_layout(mixed $layout)
    {
        $this->args['layout'] = $layout;
    }

    /**
     * @return mixed
     */
    public function get_layout(): mixed
    {
        if (array_key_exists('layout', $this->args)) {
            return $this->args['layout'];
        }
        
        return [];
    }

    public function add_layout($key, $value)
    {
        if (array_key_exists('layout', $this->args)) {
            $this->args['layout'][$key] = $value;
            return $this;
        }

        $this->args['layout'] = [
            $key => $value
        ];

        return $this;
    }
}