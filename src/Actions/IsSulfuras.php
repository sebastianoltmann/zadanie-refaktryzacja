<?php

declare(strict_types=1);

namespace App\Actions;

use App\AbstractQuality;
use App\Enums\ItemName;

class IsSulfuras extends AbstractUpdateQualityAction
{
    private const SULFURAS_QUALITY = 80;

    public function update(AbstractQuality $item, AbstractQuality $originalItem): AbstractQuality
    {
        if ($item->getName()->equals(ItemName::SULFURAS())) {
            $item->setSellIn($originalItem->getSellIn());
            $item->setQuality(self::SULFURAS_QUALITY);
        }

        return parent::update($item, $originalItem);
    }
}
