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
    public function save($file_image, $image_name)
    {
        $path = $image_name.'.'.$file_image->getClientOriginalExtension();
        Image::make($file_image->getRealPath())->resize(500, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path($path));

        return url($path);
    }
}
