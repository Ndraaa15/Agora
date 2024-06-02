<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Models\Event;
use Filament\Actions;
use App\ThirdParty\CloudinaryLib;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use App\Filament\Resources\EventResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Http\UploadedFile;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        try {
            $imagesUrl = [];
            $cloudinary = new CloudinaryLib();

            if (isset($data['images'])) {
                foreach ($data['images'] as $image) {
                    if ($image instanceof UploadedFile) {
                        $tempPath = $image->getRealPath();
                        $result = $cloudinary->upload($image->getRealPath());
                        array_push($imagesUrl, $result);
                    }
                }
                $data['images'] = $imagesUrl;
            }

            return Event::create($data);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }
}
