<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait ImageUpload
{
    public function UserImageUpload($query, $location) // Taking input image and location as parameter
    {
        $upload_path = 'images' . $location;

        if (!File::exists($upload_path)) {
            File::makeDirectory($upload_path);
        }

        $image_name = Str::random(20);
        $ext = strtolower($query->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $image_full_name = $image_name . '.' . $ext;
        $image_url = $upload_path . $image_full_name;
        $success = $query->move($upload_path, $image_full_name);
        return $image_url; // Just return image
    }
}
