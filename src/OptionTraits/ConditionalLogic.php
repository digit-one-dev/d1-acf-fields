<?php

namespace DigitOne\Acf\OptionTraits;


trait ConditionalLogic {
    /**
     * @param $conditional_logic
     *
     * @return the updated instance
     */
    public function conditional_logic($conditional_logic)
    {
        $this->set_conditional_logic($conditional_logic);

        return $this;
    }

    /**
     * @param $conditional_logic
     */
    public function set_conditional_logic($conditional_logic)
    {
        $this->args['conditional_logic'] = $conditional_logic;
    }

    /**
     * @return String
     */
    public function get_conditional_logic()
    {
        return $this->args['conditional_logic'];
    }
}