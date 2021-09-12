<?php

namespace Tests\PropertyBag;

use App\PropertyBag\DiscountBag;
use PHPUnit\Framework\TestCase;

class DiscountBagTest extends TestCase
{
    /**
     * @test
     */
    public function getter_setter_discount_success()
    {
        $value = 7;
        $type = 'DOLLAR';
        $priority = 1;
        $discounts = new DiscountBag();
        $discounts->setValue($value);
        $discounts->setType($type);
        $discounts->setPriority($priority);

        $this->assertEquals($discounts->getValue(), $value);
        $this->assertEquals($discounts->getType(), $type);
        $this->assertEquals($discounts->getPriority(), $priority);
    }
}
