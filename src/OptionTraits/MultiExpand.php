<?php

namespace DigitOne\Acf\OptionTraits;


trait MultiExpand {
    /**
     * @param mixed $multi_expand
     *
     * @return self the updated instance
     */
    public function multi_expand(mixed $multi_expand): self
    {
        $this->set_multi_expand($multi_expand);

        return $this;
    }

    /**
     * @param mixed $multi_expand
     */
    public function set_multi_expand(mixed $multi_expand)
    {
        $this->args['multi_expand'] = $multi_expand;
    }

    /**
     * @return mixed
     */
    public function get_multi_expand(): mixed
    {
        if (array_key_exists('multi_expand', $this->args)) {
            return $this->args['multi_expand'];
        }
        
        return [];
    }

    public function add_multi_expand($key, $value)
    {
        if (array_key_exists('multi_expand', $this->args)) {
            $this->args['multi_expand'][$key] = $value;
            return $this;
        }

        $this->args['multi_expand'] = [
            $key => $value
        ];

        return $this;
    }
}