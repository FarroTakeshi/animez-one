<?php

namespace App\Services;

/**
 * Upload images for animes and seiyuus
 * @author Takeshi Farro, Junior Zavaleta
 * @version 1.1
 */
use Image;

class ImageUpload
{
    public function save($file_image, $file_path)
    {
        Image::make($file_image->getRealPath())->resize(500, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path($file_path));
    }
}
