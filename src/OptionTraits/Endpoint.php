<?php

namespace DigitOne\Acf\OptionTraits;


trait Endpoint {
    /**
     * @param mixed $endpoint
     *
     * @return self the updated instance
     */
    public function endpoint(mixed $endpoint): self
    {
        $this->set_endpoint($endpoint);

        return $this;
    }

    /**
     * @param mixed $endpoint
     */
    public function set_endpoint(mixed $endpoint)
    {
        $this->args['endpoint'] = $endpoint;
    }

    /**
     * @return mixed
     */
    public function get_endpoint(): mixed
    {
        if (array_key_exists('endpoint', $this->args)) {
            return $this->args['endpoint'];
        }
        
        return [];
    }

    public function add_endpoint($key, $value)
    {
        if (array_key_exists('endpoint', $this->args)) {
            $this->args['endpoint'][$key] = $value;
            return $this;
        }

        $this->args['endpoint'] = [
            $key => $value
        ];

        return $this;
    }
}