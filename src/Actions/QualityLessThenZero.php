<?php

declare(strict_types=1);

namespace App\Actions;

use App\AbstractQuality;

class QualityLessThenZero extends AbstractUpdateQualityAction
{
    public function update(AbstractQuality $item, AbstractQuality $originalItem): AbstractQuality
    {
        if ($item->getQuality() < self::ZERO_QUALITY) {
            $item->setQuality(self::ZERO_QUALITY);
        }

        return parent::update($item, $originalItem);
    }
}
