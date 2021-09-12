<?php

namespace App\PropertyBag;

use Carbon\Carbon;
use RuntimeException;

use function PHPUnit\Framework\throwException;

class OrderBag
{
    protected int $orderId = 0;
    protected ?Carbon $orderCreatedAt = null;
    protected array $orderItems = [];

    public function __construct()
    {
    }
    public function setOrderId(int $orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }

    public function setOrderCreatedAt(Carbon $orderCreatedAt)
    {
        $this->orderCreatedAt = $orderCreatedAt;
        return $this;
    }

    public function getOrderCreatedAt(): ?Carbon
    {
        return $this->orderCreatedAt;
    }

    public function setOrderItem(array $orderItems)
    {
        foreach ($orderItems as $key => $value) {
            if (!$value instanceof OrderItemBag) {
                throw new RuntimeException();
            }
        }
        $this->orderItems = $orderItems;
        return $this;
    }
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }
}
