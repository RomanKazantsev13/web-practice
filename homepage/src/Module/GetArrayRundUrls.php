<?php
namespace App\Module;

use App\Module\ImageSpiderProvider;


class GetArrayRundUrls
{    
    public function addData($theme)
    {
        $imageProvide = new ImageSpiderProvider();
        
        $this->topic[] = [
            'header' => $theme, 
            'images' => $imageProvide->getArrayUrls($theme) 
        ];
    }

    public function getData()
    {
        return $this->topic;
    }
}