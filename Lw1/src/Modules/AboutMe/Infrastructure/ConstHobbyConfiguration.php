<?php

namespace App\Modules\AboutMe\Infrastructure;

use App\Modules\AboutMe\App\HobbyConfigurationInterface;

class ConstHobbyConfiguration implements HobbyConfigurationInterface
{
    public function getHobbyMap(): array
    {
        return [
            'Game_Development',
            'Necromunda_table_game',
            'Book_writing',
            'English_language',
            'Volleyball'
        ];
    }
}