<?php

declare(strict_types=1);

namespace App;

use App\Enums\ItemName;

abstract class AbstractQuality
{
    /**
     * @var ItemName
     */
    protected $name;

    /**
     * @var int
     */
    protected $sellIn;

    /**
     * @var int
     */
    protected $quality;

    public function __construct(
        string $name,
        int $sellIn,
        int $quality
    ) {
        $this->sellIn = $sellIn;
        $this->quality = $quality;
        $this->name = ItemName::from($name);
    }

    public function getName(): ItemName
    {
        return $this->name;
    }

    public function setSellIn(int $quantity = 1): self
    {
        $this->sellIn = $quantity;

        return $this;
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

    public function setQuality(int $quantity = 1): self
    {
        $this->quality = $quantity;

        return $this;
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
}
