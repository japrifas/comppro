<?php

namespace App\Filament\Resources\WhyResource\Pages;

use App\Filament\Resources\WhyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWhy extends EditRecord
{
    protected static string $resource = WhyResource::class;

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
