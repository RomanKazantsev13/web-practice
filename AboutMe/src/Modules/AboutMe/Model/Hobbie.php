<?php

namespace App\Modules\AboutMe\Model;

class Hobbie
{
    private string $theme;
    private array $arrUrls;


    function __construct($theme, $arrUrls)
    {
        $this->theme = $theme;
        $this->arrUrls = $arrUrls;
    }

    function getHeader(): string
    {
        return $this->theme;
    }

    function getArrUrls(): array
    {
        return $this->arrUrls;
    }
}