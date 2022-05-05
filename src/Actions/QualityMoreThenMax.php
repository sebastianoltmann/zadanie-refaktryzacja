<?php

declare(strict_types=1);

namespace App\Actions;

use App\AbstractQuality;

class QualityMoreThenMax extends AbstractUpdateQualityAction
{
    public function update(AbstractQuality $item, AbstractQuality $originalItem): AbstractQuality
    {
        if ($item->getQuality() > self::MAX_QUALITY) {
            $item->setQuality(self::MAX_QUALITY);
        }

        return parent::update($item, $originalItem);
    }
}
