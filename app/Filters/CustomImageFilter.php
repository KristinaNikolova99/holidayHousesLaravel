<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class CustomImageSampleFilter implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->fit(256, 240)->greyscale();
    }
}