<?php

namespace DigitOne\Acf\OptionTraits;


trait Instructions {
    /**
     * @param string $instructions
     *
     * @return self the updated instance
     */
    public function instructions($instructions): self
    {
        $this->set_instructions($instructions);

        return $this;
    }

    /**
     * @param string $instructions
     */
    public function set_instructions($instructions)
    {
        $this->args['instructions'] = $instructions;
    }

    /**
     * @return string
     */
    public function get_instructions(): string
    {
        return $this->args['instructions'];
    }
}