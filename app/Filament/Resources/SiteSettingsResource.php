<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\SiteSettings;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Faker\Provider\ar_EG\Text;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SiteSettingsResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\SiteSettingsResource\RelationManagers;
use App\Filament\Resources\SiteSettingsResource\Pages\EditSiteSettings;
use App\Filament\Resources\SiteSettingsResource\Pages\ListSiteSettings;
use App\Filament\Resources\SiteSettingsResource\Pages\CreateSiteSettings;

class SiteSettingsResource extends Resource
{
    protected static ?string $model = SiteSettings::class;
    protected static ?string $navigationGroup = 'Site Settings';
    protected static ?string $navigationIcon = 'heroicon-o-collection';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('site_name'),
                        SpatieMediaLibraryFileUpload::make('logo')->collection('logo'),
                        SpatieMediaLibraryFileUpload::make('favicon')->collection('favicon'),

                        TextInput::make('keyword')->label('Meta Keyword For SEO (Pisahkan tiap keyword dengan koma)'),
                        TextInput::make('description')->label('Meta Description For SEO'),
                        TextInput::make('phone'),
                        TextInput::make('email'),
                        TextInput::make('location'),
                        TextInput::make('facebook')->label('Facebook Url')->url()
                            ->prefix('https://'),
                        TextInput::make('twitter')->label('Twitter Url')->url()
                            ->prefix('https://'),
                        TextInput::make('instagram')->label('Instagram Url')->url()
                            ->prefix('https://'),
                        TextInput::make('linkedin')->label('Linkedin Url')->url()
                            ->prefix('https://'),
                    ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('site_name'),
                SpatieMediaLibraryImageColumn::make('logo')->collection('logo'),
                SpatieMediaLibraryImageColumn::make('favicon')->collection('favicon'),

                TextColumn::make('keyword'),
                TextColumn::make('description'),
                TextColumn::make('phone'),
                TextColumn::make('email'),
                TextColumn::make('location'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSettings::route('/create'),
            'edit' => Pages\EditSiteSettings::route('/{record}/edit'),
        ];
    }
}
