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
    }

    public function getArrayUrls(): array
    {
        $this->getUrls();
        for ($i=0; $i < 5; $i++)
        {
            $images[] = $this->urls[rand(0, count($this->urls) - 1)];
        }
        return $images;
    }

    public function addData()
    {
        $this->topic[] = [
            'header' => $this->theme, 
            'images' => $this->getArrayUrls() 
        ];
    }

    public function getRundData()
    {
        return $this->topic;
    }

    public function getImagesSlider(): array
    {
        $this->getUrls();
        for ($i=0; $i < 10; $i++)
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