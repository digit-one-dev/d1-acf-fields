<?php

namespace DigitOne\Acf\OptionTraits;


trait Wrapper {
    /**
     * @param array $wrapper
     *
     * @return self the updated instance
     */
    public function wrapper(array $wrapper): self
    {
        $this->set_wrapper($wrapper);

        return $this;
    }

    /**
     * @param array $wrapper
     */
    public function set_wrapper(array $wrapper)
    {
        $this->args['wrapper'] = $wrapper;
    }

    /**
     * @return array
     */
    public function get_wrapper(): array
    {
        if (array_key_exists('wrapper', $this->args) {
            return $this->args['wrapper'];
        }

        return [];
    }
}