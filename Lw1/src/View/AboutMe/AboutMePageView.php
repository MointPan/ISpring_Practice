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
        $hobbiesParams = [];
        foreach ($this->hobbies as $hobby)
        {
            $hobbiesParams[$hobby->getTheme()] = $hobby->getImages();
        }
        return [ 'hobbies' => $hobbiesParams ];
    }
} 