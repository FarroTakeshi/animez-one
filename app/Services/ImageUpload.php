<?php

namespace App\Services;

/**
 * Upload images for animes and seiyuus
 * @author Takeshi Farro, Junior Zavaleta
 * @version 1.1
 */
use Image;
use Storage;

class ImageUpload
{
    public function save($file_image, $file_path)
    {
        Image::make($file_image->getRealPath())->resize(500, 700)->save(public_path($file_path));
    }

    public function delete($file_path)
    {
        unlink(public_path($file_path));
    }
}
