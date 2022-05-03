<?php

namespace DigitOne\Acf\OptionTraits;


trait Instructions {
    /**
     * @param $instructions
     *
     * @return the updated instance
     */
    public function instructions($instructions)
    {
        $this->set_instructions($instructions);

        return $this;
    }

    /**
     * @param $instructions
     */
    public function set_instructions($instructions)
    {
        $this->args['instructions'] = $instructions;
    }

    /**
     * @return String
     */
    public function get_instructions()
    {
        return $this->args['instructions'];
    }
}