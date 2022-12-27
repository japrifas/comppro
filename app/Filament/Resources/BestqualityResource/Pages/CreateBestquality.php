<?php

namespace App\Filament\Resources\BestqualityResource\Pages;

use App\Filament\Resources\BestqualityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBestquality extends CreateRecord
{
    protected static string $resource = BestqualityResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
