<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Bestquality;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BestqualityResource\Pages;
use App\Filament\Resources\BestqualityResource\RelationManagers;
use App\Filament\Resources\BestqualityResource\Pages\EditBestquality;
use App\Filament\Resources\BestqualityResource\Pages\CreateBestquality;
use App\Filament\Resources\BestqualityResource\Pages\ListBestqualities;

class BestqualityResource extends Resource
{
    protected static ?string $model = Bestquality::class;
    protected static ?string $navigationLabel = 'Best Quality Service Option';
    protected static ?string $navigationGroup = 'Option Data';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('title')->required(),
                        Textarea::make('description')->required(),

                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('description')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
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
            'index' => Pages\ListBestqualities::route('/'),
            'create' => Pages\CreateBestquality::route('/create'),
            'edit' => Pages\EditBestquality::route('/{record}/edit'),
        ];
    }
}
