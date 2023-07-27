<?php

namespace DigitOne\Acf\OptionTraits;


trait MimeTypes {
    /**
     * @param mixed $mime_types
     *
     * @return self the updated instance
     */
    public function mime_types(mixed $mime_types): self
    {
        $this->set_mime_types($mime_types);

        return $this;
    }

    /**
     * @param mixed $mime_types
     */
    public function set_mime_types(mixed $mime_types)
    {
        $this->args['mime_types'] = $mime_types;
    }

    /**
     * @return mixed
     */
    public function get_mime_types(): mixed
    {
        if (array_key_exists('mime_types', $this->args)) {
            return $this->args['mime_types'];
        }
        
        return [];
    }

    public function add_mime_types($key, $value)
    {
        if (array_key_exists('mime_types', $this->args)) {
            $this->args['mime_types'][$key] = $value;
            return $this;
        }

        $this->args['mime_types'] = [
            $key => $value
        ];

        return $this;
    }
}