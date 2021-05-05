<?php

namespace App\Modules\AboutMe\App;

interface  ImageProviderInterface
{
    function getImageUrls($theme);
}