<?php

namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\App\HobbyConfigurationInterface;
use App\Modules\AboutMe\App\ImageProviderInterface;
use App\Modules\AboutMe\Model\Hobby;

class HobbyService
{    
    private ImageProviderInterface $imageProvider;
    private HobbyConfigurationInterface $hobbyConfig;

    public function __construct(
        ImageProviderInterface $imageProvider,
        HobbyConfigurationInterface $hobbyConfig
    ){
        $this->imageProvider = $imageProvider;
        $this->hobbyConfig = $hobbyConfig;
    }

    /**
     * @return []Hobby
     */

    public function getHobbies(): array
    {
        $hobbies = [];
        $hobbyMap = $this->hobbyConfig->getHobbyMap();

        foreach ($hobbyMap as $hobbyTheme)
        {
            $images = $this->imageProvider->getImageUrls($hobbyTheme);
            $hobbies[] = new Hobby($hobbyTheme, $images);
        }
        return $hobbies;
    }
}