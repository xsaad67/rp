<?php

namespace App\Filters\Image;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Custom implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->fit(999, 999);
    }
}