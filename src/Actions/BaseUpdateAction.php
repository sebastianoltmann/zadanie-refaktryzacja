<?php

declare(strict_types=1);

namespace App\Actions;

use App\AbstractQuality;

class BaseUpdateAction extends AbstractUpdateQualityAction
{
    public function update(AbstractQuality $item, AbstractQuality $originalItem): AbstractQuality
    {
        $item->subSellIn();
        $item->subQuality();

        if ($item->getSellIn() < self::ZERO_QUALITY) {
            $item->subQuality();
        }

        return parent::update($item, $originalItem);
    }
}
