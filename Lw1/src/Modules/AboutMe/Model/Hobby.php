<?php

namespace App\Modules\AboutMe\Model;

class Hobby
{
    private string $theme;
    private array $images = [];

    public function __construct(string $theme, array $images)
    {
        $this->theme = $theme;
        $this->images = $images;
    }

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function getImages(): array
    {
        return $this->images;
    }
}