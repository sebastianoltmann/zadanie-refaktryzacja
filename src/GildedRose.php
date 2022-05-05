<?php

declare(strict_types=1);

namespace App;

use App\Actions\BaseUpdateAction;
use App\Actions\IsAgedBrieOrBackstage;
use App\Actions\IsBackstage;
use App\Actions\IsSulfuras;
use App\Actions\QualityLessThenZero;
use App\Actions\QualityMoreThenMax;

final class GildedRose
{
    public function updateQuality(AbstractQuality $item): AbstractQuality
    {
        $originalItem = clone $item;

        $actions = new BaseUpdateAction();

        $actions->next(new IsAgedBrieOrBackstage())
            ->next(new IsBackstage())
            ->next(new QualityLessThenZero())
            ->next(new QualityMoreThenMax())
            ->next(new IsSulfuras());

        return $actions->update($item, $originalItem);
    }
}
