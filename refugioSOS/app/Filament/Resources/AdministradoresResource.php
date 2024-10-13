<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdministradoresResource\Pages;
use App\Filament\Resources\AdministradoresResource\RelationManagers;
use App\Models\Administradores;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdministradoresResource extends Resource
{
    protected static ?string $model = Administradores::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?string $navigationGroup = 'Administración';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAdministradores::route('/'),
            'create' => Pages\CreateAdministradores::route('/create'),
            'edit' => Pages\EditAdministradores::route('/{record}/edit'),
        ];
    }
}
