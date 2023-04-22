<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BartenderResource\Pages;
use App\Filament\Resources\BartenderResource\RelationManagers;
use App\Models\Bartender;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
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
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('age')
                ->required(),
            Forms\Components\TextInput::make('phone')
                ->required()
                ->maxLength(255),
             Forms\Components\FileUpload::make('image')
                ->required()
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('age'),
            Tables\Columns\TextColumn::make('phone'),
            Tables\Columns\ImageColumn::make('image'),
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
