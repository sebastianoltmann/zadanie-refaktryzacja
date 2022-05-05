<?php

declare(strict_types=1);

namespace App;

class Item extends AbstractQuality
{
    public function __toString(): string
    {
        return sprintf(
            '%s, %d, %d',
            $this->getName()->getValue(),
            $this->getSellIn(),
            $this->getQuality(),
        );
    }
}
