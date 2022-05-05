<?php

declare(strict_types=1);

namespace App\Actions;

use App\AbstractQuality;
use App\Enums\ItemName;

class IsBackstage extends AbstractUpdateQualityAction
{
    private const BACKSTAGE_ADDITIONAL_CONDITIONS = [10, 6];

    public function update(AbstractQuality $item, AbstractQuality $originalItem): AbstractQuality
    {
        if ($item->getName()->equals(ItemName::BACKSTAGE_PASSES())) {
            if ($item->getSellIn() < self::ZERO_QUALITY) {
                $item->setQuality(self::ZERO_QUALITY);
            } else {
                foreach (self::BACKSTAGE_ADDITIONAL_CONDITIONS as $value) {
                    if ($item->getSellIn() < $value) {
                        $item->addQuality();
                    }
                }
            }
        }

        return parent::update($item, $originalItem);
    }
}
