<?php

namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\Infrastructure\ConstHobbieConfiguration;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Infrastructure\ImageProvider;

class HobbieService
{
    public array $result;

    function getHobbies(): array
    {
        $themes = new ConstHobbieConfiguration();
        $headers = $themes->getHobbieMap(); 
        foreach ($headers as $header)
        {
           $this->addHobbie($header);
        }
        return $this->result;
    }

    function addHobbie($theme)
    {
        $imageUrls = new ImageProvider();
        $hobbie = new Hobbie($theme, $imageUrls->getImageUrls($theme));
        $this->result[] = [
            $hobbie->getHeader(),
            $hobbie->getArrUrls(),
        ];
    }
}