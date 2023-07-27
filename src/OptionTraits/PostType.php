<?php

namespace DigitOne\Acf\OptionTraits;


trait PostType {
    /**
     * @param mixed $post_type
     *
     * @return self the updated instance
     */
    public function post_type(mixed $post_type): self
    {
        $this->set_post_type($post_type);

        return $this;
    }

    /**
     * @param mixed $post_type
     */
    public function set_post_type(mixed $post_type)
    {
        $this->args['post_type'] = $post_type;
    }

    /**
     * @return mixed
     */
    public function get_post_type(): mixed
    {
        if (array_key_exists('post_type', $this->args)) {
            return $this->args['post_type'];
        }
        
        return [];
    }

    public function add_post_type($key, $value)
    {
        if (array_key_exists('post_type', $this->args)) {
            $this->args['post_type'][$key] = $value;
            return $this;
        }

        $this->args['post_type'] = [
            $key => $value
        ];

        return $this;
    }
}