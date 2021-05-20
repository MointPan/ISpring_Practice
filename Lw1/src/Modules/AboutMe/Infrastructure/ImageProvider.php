<?php

namespace App\Modules\AboutMe\Infrastructure;

use IvanUskov\ImageSpider\ImageSpider;
use App\Modules\AboutMe\App\ImageProviderInterface;

class ImageProvider implements ImageProviderInterface
{
    private const IMAGES_AMOUNT = 5;

    public function getImageUrls(string $ImageKeyword): array
    {
        $urls = ImageSpider::find(urlencode($ImageKeyword));
        return $this->getSeveralRandomImages(self::IMAGES_AMOUNT, $urls);
    }

    private function getSeveralRandomImages(int $amount, array $urls): array
    {
        $ImagesUrls = [];
        foreach (array_rand($urls, $amount) as $index)
        {
            $ImagesUrls[] = $urls[$index];
        }
        return $ImagesUrls;
    }
}