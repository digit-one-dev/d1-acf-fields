<?php

namespace DigitOne\Acf\OptionTraits;


trait ConditionalLogic {
    /**
     * @param array $conditional_logic
     *
     * @return self the updated instance
     */
    public function conditional_logic(array $conditional_logic): self
    {
        $this->set_conditional_logic($conditional_logic);

        return $this;
    }

    /**
     * @param array $conditional_logic
     * 
     * @return self the updated instance
     */
    public function set_conditional_logic(array $conditional_logic)
    {
        $this->args['conditional_logic'] = $conditional_logic;
    }

    /**
     * @return array of conditional logic
     */
    public function get_conditional_logic(): array
    {
        if (array_key_exists('conditional_logic', $this->args)) {
            return $this->args['conditional_logic'];
        }
        
        return [];
    }
}