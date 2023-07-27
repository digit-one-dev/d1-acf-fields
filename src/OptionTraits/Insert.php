<?php

namespace DigitOne\Acf\OptionTraits;


trait Insert {
    /**
     * @param mixed $insert
     *
     * @return self the updated instance
     */
    public function insert(mixed $insert): self
    {
        $this->set_insert($insert);

        return $this;
    }

    /**
     * @param mixed $insert
     */
    public function set_insert(mixed $insert)
    {
        $this->args['insert'] = $insert;
    }

    /**
     * @return mixed
     */
    public function get_insert(): mixed
    {
        if (array_key_exists('insert', $this->args)) {
            return $this->args['insert'];
        }
        
        return [];
    }

    public function add_insert($key, $value)
    {
        if (array_key_exists('insert', $this->args)) {
            $this->args['insert'][$key] = $value;
            return $this;
        }

        $this->args['insert'] = [
            $key => $value
        ];

        return $this;
    }
}