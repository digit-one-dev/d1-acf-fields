<?php

namespace DigitOne\Acf\OptionTraits;

use DigitOne\Acf\ConditionalLogic\ConditionalLogic as ConditionalLogicBuilder;


trait ConditionalLogic {
    /**
     * @param mixed $conditional_logic
     *
     * @return self the updated instance
     */
    public function conditional_logic(mixed $conditional_logic): self
    {
        $this->set_conditional_logic($conditional_logic);

        return $this;
    }

    public function build_conditional_logic() {
        if (($this->conditional_logic ?? false) instanceof ConditionalLogicBuilder) {
            return $this->conditional_logic->build();
        }

        return $this->conditional_logic ?? false;
    }

    /**
     * @param array $conditional_logic
     * 
     * @return self the updated instance
     */
    public function set_conditional_logic(mixed $conditional_logic)
    {
        $this->conditional_logic = $conditional_logic;
    }

    /**
     * @return array of conditional logic
     */
    public function get_conditional_logic(): array
    {
        return $this->conditional_logic ?? false;
    }
}