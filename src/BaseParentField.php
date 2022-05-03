<?php

namespace DigitOne\Acf;

use DigitOne\Acf\BaseField;

class BaseParentField extends BaseField
{
    protected $sub_fields = [];

    /**
     * @param array[BaseField] sub_fields of this field
     * 
     * @return self the updated instance
     */
    public function sub_fields(array $sub_fields = []): self
    {
        $this->set_sub_fields($sub_fields);

        return $this;
    }

    /**
     * @param array[BaseField] sub_fields of this field
     */
    public function set_sub_fields(array $sub_fields = [])
    {
        $this->sub_fields = collect($sub_fields)
            ->mapWithKeys(function ($field, $key) {
              if (!is_subclass_of($field, BaseField::class)) {
                  error_log("WARN: set_sub_fields called with an Array that contains something that is not of type BaseField: " . print_r($field, true));
                  return false;
              }

              $field->set_prefix($this->get_key());

              return [ $field->get_name() => $field ];
            })->filter()->toArray();
    }

    /**
     * @return array of sub_fields
     */
    public function get_sub_fields(): array
    {
        return $this->sub_fields;
    }

    /**
     * Builds the array for ACF registration. 
     *
     * @param array $parameter to be added to the registration (deprecated)
     *
     * @return array for ACF registration
     */
    public function build(array $parameter = []): array
    {
        if (!$this->sub_fields) {
            return parent::build($parameter);
        }

        return parent::build(array_merge($parameter, [
            'sub_fields' => $this->build_sub_fields()
        ]));
    }

    /**
     * Recursively builds the sub_fields of this field.
     * 
     * @return array of acf registration data
     */
    private function build_sub_fields(): array
    {
        if (!$this->sub_fields) {
            return [];
        }

        return collect($this->sub_fields)
            ->map(function($sub_field) {
                return $sub_field->build();
            })->toArray();
    }

    /**
     * Recursively calls the transform methods of the sub_fields
     * with their data.
     * 
     * @param array data that is returned by ACF get_field() for this field
     * 
     * @return array of recursively transformed data
     */
    public function transform(array $data): array
    {
        return collect($data)
            ->mapWithKeys(function($value, $key) {
                if (!array_key_exists($key, $this->sub_fields)) {
                    return [$key => $value];
                }

                $sub_field = $this->sub_fields[$key];
                return [ $key => $sub_field->transform($value)];
            })->toArray();
    }
}