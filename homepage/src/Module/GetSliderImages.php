<?php
namespace App\Module;
use IvanUskov\ImageSpider\ImageSpider;


class GetSliderImages
{
    private array $urls;


    public function getUrls()
    {
        $this->urls = ImageSpider::find("Sportcar");
    }

    public function getImagesSlider(): array
    {
        $this->getUrls();
        for ($i=0; $i < 4; $i++)
        {
            $imagesSlider[] = $this->urls[rand(0, count($this->urls) - 1)];
        }
        return $imagesSlider;
    }

    public function getSliderData()
    {
        return $this->getImagesSlider();
    }
}