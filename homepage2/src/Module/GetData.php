<?php
namespace App\Module;
use IvanUskov\ImageSpider\ImageSpider;


class GetData
{
    private array $images;
    private array $topic;

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
            $images[] = $this->urls[mt_rand(0, count($this->urls) - 1)];
        }
        return $images;
    }

    public function addData()
    {
        $topic[] = [
            'header' => $this->theme, 
            'images' => $this->getArrayUrls() 

        ];
        return $topic;
    }

    public function getData()
    {
        return $this->addData();
    }
}