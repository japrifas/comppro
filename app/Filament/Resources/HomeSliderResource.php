<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\HomeSlider;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeSliderResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\HomeSliderResource\RelationManagers;
use App\Filament\Resources\HomeSliderResource\Pages\EditHomeSlider;
use App\Filament\Resources\HomeSliderResource\Pages\ListHomeSliders;
use App\Filament\Resources\HomeSliderResource\Pages\CreateHomeSlider;
use Filament\Forms\Components\TextInput;

class HomeSliderResource extends Resource
{
    protected static ?string $model = HomeSlider::class;
    protected static ?string $navigationLabel = 'HomeSlider Option';
    protected static ?string $navigationGroup = 'Option Data';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('title')->required(),
                        TextInput::make('description')->required(),
                        SpatieMediaLibraryFileUpload::make('homeslider')->collection('homeslider')->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                SpatieMediaLibraryImageColumn::make('homeslider')->collection('homeslider'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHomeSliders::route('/'),
            'create' => Pages\CreateHomeSlider::route('/create'),
            'edit' => Pages\EditHomeSlider::route('/{record}/edit'),
        ];
    }
}
