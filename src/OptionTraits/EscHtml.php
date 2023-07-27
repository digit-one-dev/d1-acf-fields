<?php

namespace DigitOne\Acf\OptionTraits;


trait EscHtml {
    /**
     * @param mixed $esc_html
     *
     * @return self the updated instance
     */
    public function esc_html(mixed $esc_html): self
    {
        $this->set_esc_html($esc_html);

        return $this;
    }

    /**
     * @param mixed $esc_html
     */
    public function set_esc_html(mixed $esc_html)
    {
        $this->args['esc_html'] = $esc_html;
    }

    /**
     * @return mixed
     */
    public function get_esc_html(): mixed
    {
        if (array_key_exists('esc_html', $this->args)) {
            return $this->args['esc_html'];
        }
        
        return [];
    }

    public function add_esc_html($key, $value)
    {
        if (array_key_exists('esc_html', $this->args)) {
            $this->args['esc_html'][$key] = $value;
            return $this;
        }

        $this->args['esc_html'] = [
            $key => $value
        ];

        return $this;
    }
}