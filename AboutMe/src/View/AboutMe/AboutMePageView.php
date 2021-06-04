<?php

namespace App\View\AboutMe;

use App\Modules\AboutMe\Model\Hobbie;

class AboutMePageView
{
    private array $hobbies = [];
    private array $result = [];

    public function buildParams($hobbies): array
    {
        foreach ($hobbies as $hobbie)
        {
            $images  = [];

            foreach ($hobbie->getImages() as $value) 
            {
                $images[] = $value->getUrl();
            }

            $result[] = [
                'header' => $hobbie->getHeader(),
                'images' => $images,
            ];
        }

        return $result;
    }

}