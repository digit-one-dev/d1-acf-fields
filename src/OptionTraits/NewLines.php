<?php

namespace DigitOne\Acf\OptionTraits;


trait NewLines {
    /**
     * @param mixed $new_lines
     *
     * @return self the updated instance
     */
    public function new_lines(mixed $new_lines): self
    {
        $this->set_new_lines($new_lines);

        return $this;
    }

    /**
     * @param mixed $new_lines
     */
    public function set_new_lines(mixed $new_lines)
    {
        $this->args['new_lines'] = $new_lines;
    }

    /**
     * @return mixed
     */
    public function get_new_lines(): mixed
    {
        if (array_key_exists('new_lines', $this->args)) {
            return $this->args['new_lines'];
        }
        
        return [];
    }

    public function add_new_lines($key, $value)
    {
        if (array_key_exists('new_lines', $this->args)) {
            $this->args['new_lines'][$key] = $value;
            return $this;
        }

        $this->args['new_lines'] = [
            $key => $value
        ];

        return $this;
    }
}