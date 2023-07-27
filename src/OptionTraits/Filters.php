<?php

namespace DigitOne\Acf\OptionTraits;


trait Filters {
    /**
     * @param mixed $filters
     *
     * @return self the updated instance
     */
    public function filters(mixed $filters): self
    {
        $this->set_filters($filters);

        return $this;
    }

    /**
     * @param mixed $filters
     */
    public function set_filters(mixed $filters)
    {
        $this->args['filters'] = $filters;
    }

    /**
     * @return mixed
     */
    public function get_filters(): mixed
    {
        if (array_key_exists('filters', $this->args)) {
            return $this->args['filters'];
        }
        
        return [];
    }

    public function add_filters($key, $value)
    {
        if (array_key_exists('filters', $this->args)) {
            $this->args['filters'][$key] = $value;
            return $this;
        }

        $this->args['filters'] = [
            $key => $value
        ];

        return $this;
    }
}