<?php

namespace App\Filament\Resources\BestqualityResource\Pages;

use App\Filament\Resources\BestqualityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBestqualities extends ListRecords
{
    protected static string $resource = BestqualityResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
