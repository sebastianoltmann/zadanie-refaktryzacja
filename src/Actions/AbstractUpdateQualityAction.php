<?php

declare(strict_types=1);

namespace App\Actions;

use App\AbstractQuality;

abstract class AbstractUpdateQualityAction
{
    protected const ZERO_QUALITY = 0;
    protected const MAX_QUALITY = 50;

    /**
     * @var AbstractUpdateQualityAction|null
     */
    public $next = null;

    public function next(AbstractUpdateQualityAction $action): AbstractUpdateQualityAction
    {
        $this->next = $action;

        return $action;
    }

    public function update(AbstractQuality $item, AbstractQuality $originalItem): AbstractQuality
    {
        if ($this->next === null) {
            return $item;
        }

        return $this->next->update($item, $originalItem);
    }
}
