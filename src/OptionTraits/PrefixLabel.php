<?php

namespace DigitOne\Acf\OptionTraits;


trait PrefixLabel {
    /**
     * @param mixed $prefix_label
     *
     * @return self the updated instance
     */
    public function prefix_label(mixed $prefix_label): self
    {
        $this->set_prefix_label($prefix_label);

        return $this;
    }

    /**
     * @param mixed $prefix_label
     */
    public function set_prefix_label(mixed $prefix_label)
    {
        $this->args['prefix_label'] = $prefix_label;
    }

    /**
     * @return mixed
     */
    public function get_prefix_label(): mixed
    {
        if (array_key_exists('prefix_label', $this->args)) {
            return $this->args['prefix_label'];
        }
        
        return [];
    }

    public function add_prefix_label($key, $value)
    {
        if (array_key_exists('prefix_label', $this->args)) {
            $this->args['prefix_label'][$key] = $value;
            return $this;
        }

        $this->args['prefix_label'] = [
            $key => $value
        ];

        return $this;
    }
}