<?php

namespace DigitOne\Acf\OptionTraits;


trait Step {
    /**
     * @param mixed $step
     *
     * @return self the updated instance
     */
    public function step(mixed $step): self
    {
        $this->set_step($step);

        return $this;
    }

    /**
     * @param mixed $step
     */
    public function set_step(mixed $step)
    {
        $this->args['step'] = $step;
    }

    /**
     * @return mixed
     */
    public function get_step(): mixed
    {
        if (array_key_exists('step', $this->args)) {
            return $this->args['step'];
        }
        
        return [];
    }

    public function add_step($key, $value)
    {
        if (array_key_exists('step', $this->args)) {
            $this->args['step'][$key] = $value;
            return $this;
        }

        $this->args['step'] = [
            $key => $value
        ];

        return $this;
    }
}