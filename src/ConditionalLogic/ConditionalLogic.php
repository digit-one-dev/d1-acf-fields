<?php

namespace DigitOne\Acf\ConditionalLogic;

use DigitOne\Acf\BaseField;

/**
 */
class ConditionalLogic
{
    /**
     * Conditional Rules
     * @var array[array]
     */
    private $config = [[]];

    /**
     * Creates the first rule. Additional rules can be chained use `or` and `and`
     * @param BaseField $field
     * @param string $operator
     * @param string $value
     */
    public function __construct(BaseField $field, $operator, $value)
    {
        $this->and($field, $operator, $value);
    }

    /**
     * Build the config
     * @return array
     */
    public function build()
    {
        return collect($this->config)->map(function ($or) {
            return collect($or)->map(function($condition) {
                $condition['field'] = $condition['field']->get_key();
                
                return $condition;
            })->toArray();
        })->toArray();
    }

    /**
     * Creates an AND condition
     * @param  BaseField $field
     * @param  string $operator
     * @param  string $value
     * @return $this
     */
    public function and(BaseField $field, $operator, $value)
    {
        $orCondition = $this->popOrCondition();
        $orCondition[] = $this->createCondition($field, $operator, $value);
        $this->pushOr($orCondition);

        return $this;
    }

    /**
     * Creates an OR condition
     * @param  BaseField $field
     * @param  string $operator
     * @param  string $value
     * @return $this
     */
    public function or(BaseField $field, $operator, $value)
    {
        $condition = $this->createCondition($field, $operator, $value);
        $this->pushOr([$condition]);

        return $this;
    }

    protected function pushOr($condition) {
        $this->config[] = $condition;
    }

    /**
     * Creates a condition
     * @param  BaseField $field
     * @param  string $operator
     * @param  string $value
     * @return array
     */
    protected function createCondition(BaseField $field, $operator, $value)
    {
        return [
            'field' => $field,
            'operator' => $operator,
            'value' => $value,
        ];
    }

    /**
     * Removes and returns the last top level OR condition
     * @return array
     */
    protected function popOrCondition()
    {
        return array_pop($this->config);
    }
}