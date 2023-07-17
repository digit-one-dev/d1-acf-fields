<?php

namespace DigitOne\Acf\OptionTraits;


trait RowsPerPage {
    /**
     * @param mixed $rows_per_page
     *
     * @return self the updated instance
     */
    public function rows_per_page(mixed $rows_per_page): self
    {
        $this->set_rows_per_page($rows_per_page);

        return $this;
    }

    /**
     * @param mixed $rows_per_page
     */
    public function set_rows_per_page(mixed $rows_per_page)
    {
        $this->args['rows_per_page'] = $rows_per_page;
    }

    /**
     * @return mixed
     */
    public function get_rows_per_page(): mixed
    {
        if (array_key_exists('rows_per_page', $this->args)) {
            return $this->args['rows_per_page'];
        }
        
        return [];
    }

    public function add_rows_per_page($key, $value)
    {
        if (array_key_exists('rows_per_page', $this->args)) {
            $this->args['rows_per_page'][$key] = $value;
            return $this;
        }

        $this->args['rows_per_page'] = [
            $key => $value
        ];

        return $this;
    }
}