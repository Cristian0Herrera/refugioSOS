<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RefugiadosResource\Pages;
use App\Filament\Resources\RefugiadosResource\RelationManagers;
use App\Models\Refugiados;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RefugiadosResource extends Resource
{
    protected static ?string $model = Refugiados::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')->required(),
                Forms\Components\TextInput::make('fechaNacimiento'),
                Forms\Components\TextInput::make('telefono')->required(),
                Forms\Components\TextInput::make('genero')->required(),
                Forms\Components\TextInput::make('dui')->required(),
                Forms\Components\TextInput::make('fechaIngreso')->required(),
                Forms\Components\TextInput::make('nunPersonasFamiliar')->required(),
                Forms\Components\TextInput::make('condicionSalud')->required(),
                Forms\Components\TextInput::make('albergueAsignado')->required(),
                Forms\Components\TextInput::make('observaciones')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('nombre')
                ->searchable(),
                Tables\Columns\TextColumn::make('fechaNacimiento'),
                Tables\Columns\TextColumn::make('telefono')
                ->searchable(),
                Tables\Columns\TextColumn::make('genero'),
                Tables\Columns\TextColumn::make('dui')
                ->searchable(),
                Tables\Columns\TextColumn::make('fechaIngreso'),
                Tables\Columns\TextColumn::make('observaciones'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListRefugiados::route('/'),
            'create' => Pages\CreateRefugiados::route('/create'),
            'edit' => Pages\EditRefugiados::route('/{record}/edit'),
        ];
    }
}
