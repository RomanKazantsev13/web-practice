<?php

namespace App\Modules\AboutMe\Infrastructure;

use IvanUskov\ImageSpider\ImageSpider;

class ImageProvider
{
    const QUANTITY_IMAGES = 5;

    function getImageUrls($theme): array
    {
        $imageUrls = ImageSpider::find($theme);

        for ($i = 0; $i < self::QUANTITY_IMAGES; $i++)
        {
            $result[] = $imageUrls[mt_rand(0, (count($imageUrls) - 1))];
        }

        return $result;
    }
}