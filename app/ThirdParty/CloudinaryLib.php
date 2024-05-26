<?php

namespace App\ThirdParty;

use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Cloudinary;

class CloudinaryLib
{
    private $cloudinary;
    public function __construct()
    {
        $config = Configuration::instance([
            'cloud' => [
                'cloud_name' => config('cloudinary.cloud_name'),
                'api_key' => config('cloudinary.api_key'),
                'api_secret' => config('cloudinary.api_secret')
            ],
            'url' => [
                'secure' => true
            ]
        ]);

        $this->cloudinary = new Cloudinary($config);
    }

    public function upload($file)
    {
        $upload = new UploadApi();
        $res = $upload->upload($file, [
            'folder' => 'agora',
        ]);

        return $res['secure_url'];
    }
}
