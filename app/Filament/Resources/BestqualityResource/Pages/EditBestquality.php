<?php

namespace App\Filament\Resources\BestqualityResource\Pages;

use App\Filament\Resources\BestqualityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBestquality extends EditRecord
{
    protected static string $resource = BestqualityResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
