<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PermisosResource\Pages;
use App\Filament\Resources\PermisosResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Spatie\Permission\Models\Permisos;
use Spatie\Permission\Models\Permission;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class PermisosResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';
    protected static ?string $navigationGroup = 'Administración';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Nombre')
                ->minLength(2)
                ->maxLength(255)      
                ->required()
                ->unique( )
                
            ]);

           
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Nombre')
                ->searchable(),

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
            'index' => Pages\ListPermisos::route('/'),
            'create' => Pages\CreatePermisos::route('/create'),
            'edit' => Pages\EditPermisos::route('/{record}/edit'),
        ];
    }
}
