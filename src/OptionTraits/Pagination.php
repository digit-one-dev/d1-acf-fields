<?php

namespace DigitOne\Acf\OptionTraits;


trait Pagination {
    /**
     * @param mixed $pagination
     *
     * @return self the updated instance
     */
    public function pagination(mixed $pagination): self
    {
        $this->set_pagination($pagination);

        return $this;
    }

    /**
     * @param mixed $pagination
     */
    public function set_pagination(mixed $pagination)
    {
        $this->args['pagination'] = $pagination;
    }

    /**
     * @return mixed
     */
    public function get_pagination(): mixed
    {
        if (array_key_exists('pagination', $this->args)) {
            return $this->args['pagination'];
        }
        
        return [];
    }

    public function add_pagination($key, $value)
    {
        if (array_key_exists('pagination', $this->args)) {
            $this->args['pagination'][$key] = $value;
            return $this;
        }

        $this->args['pagination'] = [
            $key => $value
        ];

        return $this;
    }
}