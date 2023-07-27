<?php

namespace DigitOne\Acf\OptionTraits;


trait FieldType {
    /**
     * @param mixed $field_type
     *
     * @return self the updated instance
     */
    public function field_type(mixed $field_type): self
    {
        $this->set_field_type($field_type);

        return $this;
    }

    /**
     * @param mixed $field_type
     */
    public function set_field_type(mixed $field_type)
    {
        $this->args['field_type'] = $field_type;
    }

    /**
     * @return mixed
     */
    public function get_field_type(): mixed
    {
        if (array_key_exists('field_type', $this->args)) {
            return $this->args['field_type'];
        }
        
        return [];
    }

    public function add_field_type($key, $value)
    {
        if (array_key_exists('field_type', $this->args)) {
            $this->args['field_type'][$key] = $value;
            return $this;
        }

        $this->args['field_type'] = [
            $key => $value
        ];

        return $this;
    }
}