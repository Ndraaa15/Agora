<?php

namespace App\Filament\Resources\TicketSectionResource\Pages;

use App\Filament\Resources\TicketSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTicketSections extends ListRecords
{
    protected static string $resource = TicketSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
