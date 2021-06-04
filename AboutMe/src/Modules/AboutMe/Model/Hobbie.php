<?php

namespace App\Modules\AboutMe\Model;

class Hobbie
{
    private string $theme;
    private array $images;


    public function __construct(string $theme, array $images)
    {
        $this->theme = $theme;
        $this->images = $images;
    }

    public function getHeader(): string
    {
        return $this->theme;
    }

    public function getImages(): array
    {
        return $this->images;
    }
}