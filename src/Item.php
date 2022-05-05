<?php

declare(strict_types=1);

namespace App;

final class Item
{
    private $name;
    private int $sellIn;
    private int $quality;

    public function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addSellIn(int $quantity = 1): self
    {
        $this->sellIn += $quantity;

        return $this;
    }

    public function subSellIn(int $quantity = 1): self
    {
        $this->sellIn -= $quantity;

        return $this;
    }

    public function getSellIn(): int
    {
        return $this->sellIn;
    }

    public function addQuality(int $quantity = 1): self
    {
        $this->quality += $quantity;

        return $this;
    }

    public function subQuality(int $quantity = 1): self
    {
        $this->quality -= $quantity;

        return $this;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function __toString()
    {
        return sprintf(
            '%s, %d, %d',
            $this->getName(),
            $this->getSellIn(),
            $this->getQuality(),
        );
    }
}
