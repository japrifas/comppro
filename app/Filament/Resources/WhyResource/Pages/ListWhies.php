<?php

namespace App\Filament\Resources\WhyResource\Pages;

use App\Filament\Resources\WhyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhies extends ListRecords
{
    protected static string $resource = WhyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
