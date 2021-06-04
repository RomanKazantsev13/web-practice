<?php

namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\Infrastructure\ConstHobbieConfiguration;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Model\Image;
use App\Modules\AboutMe\Infrastructure\ImageProvider;
use App\Modules\AboutMe\Infrastructure\ImageRepository;

class HobbieService
{
    private array $result;
    private ImageRepository $repository;

    public function __construct(
                                HobbieConfigurationInterface $headers,
                                ImageProviderInterface $imageUrls,
                                ImageRepository $repository
                               )
    {
        $this->headers = $headers->getHobbieMap();
        $this->imageUrls = $imageUrls;
        $this->repository = $repository;
    }

    public function getHobbies(): array
    {
        foreach ($this->headers as $header)
        {
           $this->addHobbie($header);
        }

        $this->update();

        return $this->result;
    }

    public function update() 
    {
        foreach ($this->result as $value) 
        {
            $header = $value->getHeader();
            $images = $value->getImages();
            foreach ($images as $image) 
            {
                $this->repository->deleteImage($image);
            }
            $images = [];
            foreach ($this->imageUrls->getImageUrls($header) as $value)            {
                $images[] = new Image($header, $value);
            }

           // $this->repository->update($header, $images);
        }
    }

    private function addHobbie(string $theme)
    {
        $this->result[] = new Hobbie($theme, $this->repository->getImagesByTopic($theme));
    }
}