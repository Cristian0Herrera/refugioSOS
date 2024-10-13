<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VoluntariosResource\Pages;
use App\Filament\Resources\VoluntariosResource\RelationManagers;
use App\Models\Voluntarios;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VoluntariosResource extends Resource
{
    protected static ?string $model = Voluntarios::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')->required(),
                Forms\Components\TextInput::make('telefono')->required(),
                Forms\Components\TextInput::make('dui')->required(),
                Forms\Components\TextInput::make('genero')->required(),
                Forms\Components\TextInput::make('albergueAsignado')->required(),
                Forms\Components\TextInput::make('area')->required(),
                Forms\Components\TextInput::make('fechaNacimiento')->required(),
                Forms\Components\TextInput::make('observaciones')->required(),
    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                ->searchable(),
                Tables\Columns\TextColumn::make('dui'),
                Tables\Columns\TextColumn::make('genero')
                ->searchable(),
                Tables\Columns\TextColumn::make('albergueAsignado'),
                Tables\Columns\TextColumn::make('area'),
                Tables\Columns\TextColumn::make('fechaNacimiento'),
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
            'index' => Pages\ListVoluntarios::route('/'),
            'create' => Pages\CreateVoluntarios::route('/create'),
            'edit' => Pages\EditVoluntarios::route('/{record}/edit'),
        ];
    }
}
