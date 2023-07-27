<?php

namespace DigitOne\Acf\OptionTraits;


trait PreviewSize {
    /**
     * @param mixed $preview_size
     *
     * @return self the updated instance
     */
    public function preview_size(mixed $preview_size): self
    {
        $this->set_preview_size($preview_size);

        return $this;
    }

    /**
     * @param mixed $preview_size
     */
    public function set_preview_size(mixed $preview_size)
    {
        $this->args['preview_size'] = $preview_size;
    }

    /**
     * @return mixed
     */
    public function get_preview_size(): mixed
    {
        if (array_key_exists('preview_size', $this->args)) {
            return $this->args['preview_size'];
        }
        
        return [];
    }

    public function add_preview_size($key, $value)
    {
        if (array_key_exists('preview_size', $this->args)) {
            $this->args['preview_size'][$key] = $value;
            return $this;
        }

        $this->args['preview_size'] = [
            $key => $value
        ];

        return $this;
    }
}