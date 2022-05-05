<?php

declare(strict_types=1);

namespace App\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static ItemName AGED_BRIE()
 * @method static ItemName BACKSTAGE_PASSES()
 * @method static ItemName SULFURAS()
 * @method static ItemName ELIXIR_MONGOOSE()
 */
final class ItemName extends Enum
{
    public const AGED_BRIE = 'Aged Brie';
    public const BACKSTAGE_PASSES = 'Backstage passes to a TAFKAL80ETC concert';
    public const SULFURAS = 'Sulfuras, Hand of Ragnaros';
    public const ELIXIR_MONGOOSE = 'Elixir of the Mongoose';

    public function in(ItemName ...$itemNames): bool
    {
        $check = false;
        foreach ($itemNames as $itemName) {
            if ($itemName->equals($this)) {
                $check = true;
                break;
            }
        }

        return $check;
    }
}
