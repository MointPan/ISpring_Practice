<?php

namespace App\Modules\AboutMe\Infrastructure;

use IvanUskov\ImageSpider\ImageSpider;
use App\Modules\AboutMe\App\ImageProviderInterface;

class ImageProvider implements ImageProviderInterface
{
    private const IMAGES_AMOUNT = 5;

    public function getImageUrls(string $imageKeyword): array
    {
        $urls = ImageSpider::find(urlencode($imageKeyword));
        return $this->getSeveralRandomImages(self::IMAGES_AMOUNT, $urls);
    }

    private function getSeveralRandomImages(int $amount, array $urls): array
    {
        $imagesUrls = [];
        foreach (array_rand($urls, $amount) as $index)
        {
            $imagesUrls[] = $urls[$index];
        }
        return $imagesUrls;
    }
}