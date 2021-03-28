<?php
namespace App\Module;
use IvanUskov\ImageSpider\ImageSpider;


class GetData
{
    private string $theme;
    private array $urls;

    public function setTopic(string $theme)
    {
        $this->theme = $theme;
    }

    public function getUrls()
    {
        $this->urls = ImageSpider::find($this->theme);
        // $image = $imageUrls[mt_rand(0, count($imageUrls) - 1)];
        // return $image;
    }

    public function getImages(): array
    {
        $this->getUrls();
        $images = [];
        for ($i=0, $i < 4; $i++;)
        {
            $photo = $this->urls[mt_rand(0, count($urls) - 1)];
            $images[] = $photo;
        }
        return $images;
    }

}