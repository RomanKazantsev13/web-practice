<?php

namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\Infrastructure\ConstHobbieConfiguration;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Infrastructure\ImageProvider;
use App\Modules\AboutMe\Infrastructure\ImageRepository;

class HobbieService
{
    private array $result;
    private string $header;
    private array $images;
    private ImageRepository $repository;

    public function __construct(
                                HobbieConfigurationInterface $exempl,
                                ImageProviderInterface $imageUrls,
                                ImageRepository $repository
                               )
    {
        $this->exempl = $exempl->getHobbieMap();
        $this->imageUrls = $imageUrls;
        $this->repository = $repository;
    }

    public function getHobbies(): array
    {
        foreach ($this->exempl as $header)
        {
           $this->addHobbie($header);
        }
        return $this->result;
    }

    public function update() 
    {
        foreach ($this->result as $value) {
            $this->header = $value->getHeader();
            $this->images = $value->getImages();

            $repository->update($this->header, $this->images);
        }
    }

    private function addHobbie(string $theme)
    {
        $result[] = new Hobbie($theme, $repository->getImagesByTopic($theme));
    }
}