<?php

namespace App\Filament\Resources\WhyResource\Pages;

use App\Filament\Resources\WhyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWhy extends CreateRecord
{
    protected static string $resource = WhyResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
