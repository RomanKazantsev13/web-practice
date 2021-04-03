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

    public function getArrayUrls(): array
    {
        $this->getUrls();
        for ($i=0; $i < 4; $i++)
        {
            $arrayUrls[] = $this->urls[rand(0, count($this->urls) - 1)];
        }
        return $arrayUrls;
    }

    public function getSliderData()
    {
        return $this->getArrayUrls();
    }
}