<?php

namespace DigitOne\Acf\OptionTraits;


trait EnableOpacity {
    /**
     * @param mixed $enable_opacity
     *
     * @return self the updated instance
     */
    public function enable_opacity(mixed $enable_opacity): self
    {
        $this->set_enable_opacity($enable_opacity);

        return $this;
    }

    /**
     * @param mixed $enable_opacity
     */
    public function set_enable_opacity(mixed $enable_opacity)
    {
        $this->args['enable_opacity'] = $enable_opacity;
    }

    /**
     * @return mixed
     */
    public function get_enable_opacity(): mixed
    {
        if (array_key_exists('enable_opacity', $this->args)) {
            return $this->args['enable_opacity'];
        }
        
        return [];
    }

    public function add_enable_opacity($key, $value)
    {
        if (array_key_exists('enable_opacity', $this->args)) {
            $this->args['enable_opacity'][$key] = $value;
            return $this;
        }

        $this->args['enable_opacity'] = [
            $key => $value
        ];

        return $this;
    }
}