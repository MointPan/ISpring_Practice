<?php

namespace App\View\AboutMe;

class AboutMePageView 
{
    private array $hobbies;
    
    /**
     * @param []Hobby $hobbies
     */
    public function __construct(array $hobbies)
    {
        $this->hobbies = $hobbies;
    }
    public function buildParams(): array
    {
        $hoobiesParams = [];
        foreach ($this->hobbies as $hobby)
        {
            $hobbiesParam[$hobby->getTheme()] = $hobby->getImages();
        }
        return [ 'hobbies' => $hobbiesParam ];
    }
} 