<?php

namespace App\Modules\AboutMe\Infrastructure;

use App\Modules\AboutMe\App\HobbieConfigurationInterface;

class ConstHobbieConfiguration implements HobbieConfigurationInterface
{
    function getHobbieMap(): array
    {
        return ['Hockey', 'Computer', 'Car'];
    }
}