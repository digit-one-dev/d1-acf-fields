<?php

namespace DigitOne\Acf\OptionTraits;


trait Taxonomy {
    /**
     * @param mixed $taxonomy
     *
     * @return self the updated instance
     */
    public function taxonomy(mixed $taxonomy): self
    {
        $this->set_taxonomy($taxonomy);

        return $this;
    }

    /**
     * @param mixed $taxonomy
     */
    public function set_taxonomy(mixed $taxonomy)
    {
        $this->args['taxonomy'] = $taxonomy;
    }

    /**
     * @return mixed
     */
    public function get_taxonomy(): mixed
    {
        if (array_key_exists('taxonomy', $this->args)) {
            return $this->args['taxonomy'];
        }
        
        return [];
    }

    public function add_taxonomy($key, $value)
    {
        if (array_key_exists('taxonomy', $this->args)) {
            $this->args['taxonomy'][$key] = $value;
            return $this;
        }

        $this->args['taxonomy'] = [
            $key => $value
        ];

        return $this;
    }
}