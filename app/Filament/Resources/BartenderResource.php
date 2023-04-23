<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BartenderResource\Pages;
use App\Filament\Resources\BartenderResource\RelationManagers;
use App\Models\Bartender;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BartenderResource extends Resource
{
    protected static ?string $model = Bartender::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            ->schema([
                TextInput::make('name'),
                TextInput::make('age'),
                TextInput::make('phone'),
                FileUpload::make('image'),

        ])
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('name')->sortable()->searchable(),
            TextColumn::make('age')->sortable()->searchable(),
            TextColumn::make('phone')->sortable()->searchable(),
            ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
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
            'index' => Pages\ListBartenders::route('/'),
            'create' => Pages\CreateBartender::route('/create'),
            'edit' => Pages\EditBartender::route('/{record}/edit'),
        ];
    }    
}
