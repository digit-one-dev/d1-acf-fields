<?php

namespace DigitOne\Acf\OptionTraits;


trait AllowArchives {
    /**
     * @param mixed $allow_archives
     *
     * @return self the updated instance
     */
    public function allow_archives(mixed $allow_archives): self
    {
        $this->set_allow_archives($allow_archives);

        return $this;
    }

    /**
     * @param mixed $allow_archives
     */
    public function set_allow_archives(mixed $allow_archives)
    {
        $this->args['allow_archives'] = $allow_archives;
    }

    /**
     * @return mixed
     */
    public function get_allow_archives(): mixed
    {
        if (array_key_exists('allow_archives', $this->args)) {
            return $this->args['allow_archives'];
        }
        
        return [];
    }

    public function add_allow_archives($key, $value)
    {
        if (array_key_exists('allow_archives', $this->args)) {
            $this->args['allow_archives'][$key] = $value;
            return $this;
        }

        $this->args['allow_archives'] = [
            $key => $value
        ];

        return $this;
    }
}