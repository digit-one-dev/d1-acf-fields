<?php

namespace DigitOne\Acf\OptionTraits;


trait Wrapper {
    /**
     * @param $wrapper
     *
     * @return the updated instance
     */
    public function wrapper($wrapper)
    {
        $this->set_wrapper($wrapper);

        return $this;
    }

    /**
     * @param $wrapper
     */
    public function set_wrapper($wrapper)
    {
        $this->args['wrapper'] = $wrapper;
    }

    /**
     * @return String
     */
    public function get_wrapper()
    {
        return $this->args['wrapper'];
    }
}