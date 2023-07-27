<?php

namespace DigitOne\Acf\OptionTraits;


trait Role {
    /**
     * @param mixed $role
     *
     * @return self the updated instance
     */
    public function role(mixed $role): self
    {
        $this->set_role($role);

        return $this;
    }

    /**
     * @param mixed $role
     */
    public function set_role(mixed $role)
    {
        $this->args['role'] = $role;
    }

    /**
     * @return mixed
     */
    public function get_role(): mixed
    {
        if (array_key_exists('role', $this->args)) {
            return $this->args['role'];
        }
        
        return [];
    }

    public function add_role($key, $value)
    {
        if (array_key_exists('role', $this->args)) {
            $this->args['role'][$key] = $value;
            return $this;
        }

        $this->args['role'] = [
            $key => $value
        ];

        return $this;
    }
}