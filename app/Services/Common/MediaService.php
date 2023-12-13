<?php

namespace App\Services\Common;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MediaService
{
    public function save_image($image, $destinationPath, $required_size = null)
    {

        $file = $image->getClientOriginalName();

        $filename = pathinfo($file, PATHINFO_FILENAME);
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        $rand_str = time() . '-'  . random_int(1000, 9999)  ;

        // $image_name =  time() . '-' . str_random(5) . random_int(1000, 9999) . preg_replace("/[^a-z0-9\_\-]/i", '', $filename) . '.' . $extension;
        $image_name =  $rand_str . '.' . $extension;

        // $image_name = time() . '.' . $image->getClientOriginalExtension();

        $image_path = $destinationPath . $image_name;

        if( ! File::isDirectory($destinationPath) ) {

            File::makeDirectory($destinationPath, 493, true);
        }

        $image = Image::make($image);
        error_log($image_path);

        // $img->resize($img->width() * ($resize_percent / 100), $img->height() * ($resize_percent / 100));

        if (!is_null($required_size)) {
            $image = $this->resize_image($image, $required_size);
        }

        //$image->save($image_path);

        return $image_path;
    }


    public function resize_image($image, $requiredSize)
    {

        $width = $image->width();
        $height = $image->height();

        // Check if image resize is required or not
        if ($requiredSize >= $width && $requiredSize >= $height) return $image;

        $newWidth = $width;
        $newHeight = $height;

        $aspectRatio = $width / $height;
        if ($aspectRatio >= 1.0) {
            $newWidth = $requiredSize;
            $newHeight = $requiredSize / $aspectRatio;
        } else {
            $newWidth = $requiredSize * $aspectRatio;
            $newHeight = $requiredSize;
        }

        $image->resize($newWidth, $newHeight);
        return $image;
    }



    public function save_video($video, $destinationPath)
    {

        $file = $video->getClientOriginalName();

        $filename = pathinfo($file, PATHINFO_FILENAME);
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        $rand_str = time() . '-' . str_random(4) . random_int(1000, 9999) . str_random(3);

        $video_name =  $rand_str . '.' . $extension;

        if( ! File::isDirectory($destinationPath) ) {

            File::makeDirectory($destinationPath, 493, true);
        }

        $video_path = $destinationPath . $video_name;

        // $video->move($destinationPath, $video_name);
        $video->move($destinationPath, $video_name);
        return $video_path;
    }
}
