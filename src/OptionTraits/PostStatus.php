<?php

namespace DigitOne\Acf\OptionTraits;


trait PostStatus {
    /**
     * @param mixed $post_status
     *
     * @return self the updated instance
     */
    public function post_status(mixed $post_status): self
    {
        $this->set_post_status($post_status);

        return $this;
    }

    /**
     * @param mixed $post_status
     */
    public function set_post_status(mixed $post_status)
    {
        $this->args['post_status'] = $post_status;
    }

    /**
     * @return mixed
     */
    public function get_post_status(): mixed
    {
        if (array_key_exists('post_status', $this->args)) {
            return $this->args['post_status'];
        }
        
        return [];
    }

    public function add_post_status($key, $value)
    {
        if (array_key_exists('post_status', $this->args)) {
            $this->args['post_status'][$key] = $value;
            return $this;
        }

        $this->args['post_status'] = [
            $key => $value
        ];

        return $this;
    }
}