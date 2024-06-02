<?php

namespace App\Filament\Resources\TicketSectionResource\Pages;

use App\Filament\Resources\TicketSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicketSection extends EditRecord
{
    protected static string $resource = TicketSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
