<?php

namespace App\PropertyBag;

class OrderItemBag
{
    protected int $quantity = 0;
    protected float $unitPrice = 0;
    protected int $productId = 0;

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setUnitPrice(float $unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function setProductId(float $productId)
    {
        $this->productId = $productId;
        return $this;
    }

    public function getProductId(): float
    {
        return $this->productId;
    }
}
