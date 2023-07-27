<?php

namespace DigitOne\Acf\OptionTraits;


trait Rows {
    /**
     * @param mixed $rows
     *
     * @return self the updated instance
     */
    public function rows(mixed $rows): self
    {
        $this->set_rows($rows);

        return $this;
    }

    /**
     * @param mixed $rows
     */
    public function set_rows(mixed $rows)
    {
        $this->args['rows'] = $rows;
    }

    /**
     * @return mixed
     */
    public function get_rows(): mixed
    {
        if (array_key_exists('rows', $this->args)) {
            return $this->args['rows'];
        }
        
        return [];
    }

    public function add_rows($key, $value)
    {
        if (array_key_exists('rows', $this->args)) {
            $this->args['rows'][$key] = $value;
            return $this;
        }

        $this->args['rows'] = [
            $key => $value
        ];

        return $this;
    }
}