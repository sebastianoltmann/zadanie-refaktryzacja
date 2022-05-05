<?php

declare(strict_types=1);

namespace App\Actions;

use App\AbstractQuality;
use App\Enums\ItemName;

class IsAgedBrieOrBackstage extends AbstractUpdateQualityAction
{
    public function update(AbstractQuality $item, AbstractQuality $originalItem): AbstractQuality
    {
        if ($item->getName()->in(ItemName::AGED_BRIE(), ItemName::BACKSTAGE_PASSES())) {
            $diffQuality = $originalItem->getQuality() - $item->getQuality();
            $item->setQuality($originalItem->getQuality())
                ->addQuality($diffQuality);
        }

        return parent::update($item, $originalItem);
    }
}
