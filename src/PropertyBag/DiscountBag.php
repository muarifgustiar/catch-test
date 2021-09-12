<?php

namespace App\PropertyBag;

class DiscountBag
{
    const DOLLAR = 'DOLLAR';
    const PERCENTAGE = 'PERCENTAGE';
    protected int $value = 0;
    protected string $type = '';
    protected int $priority = 0;

    public function setValue(int $value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setPriority(int $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }
}
