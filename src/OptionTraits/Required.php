<?php

namespace DigitOne\Acf\OptionTraits;


trait Required {
    /**
     * @return self the updated instance
     */
    public function required(): self
    {
        $this->set_required(true);

        return $this;
    }

    /**
     * @param bool $required
     */
    public function set_required(bool $required)
    {
        $this->args['required'] = $required;
    }

    /**
     * @return bool
     */
    public function is_required(): bool
    {
        return $this->args['required'];
    }
}