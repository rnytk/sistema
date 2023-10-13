<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParishpriestResource\Pages;
use App\Filament\Resources\ParishpriestResource\RelationManagers;
use App\Models\Parishpriest;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;



class ParishpriestResource extends Resource
{
    protected static ?string $model = Parishpriest::class;

    protected static ?string $navigationIcon = 'heroicon-o-device-tablet';
    protected static ?string $navigationLabel = 'Parroco';
    protected static ?string $navigationGroup = 'ADMINISTRACION DEL SITEMA';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre')
                    ->alpha()
                    ->required(),
                TextInput::make('apellido')
                    ->alpha()
                    ->required(),
                TextInput::make('dpi')
                    ->mask('9999 99999 9999')
                    ->placeholder('9999 99999 9999')
                    ->numeric()
                    ->length(13)
                    ->required(),
                Select::make('estado')
                    ->options([
                        '1' => 'Activo',
                        '0' => 'Inactivo'
                    ])
                    ->required()
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
            'index' => Pages\ListParishpriests::route('/'),
            'create' => Pages\CreateParishpriest::route('/create'),
            'edit' => Pages\EditParishpriest::route('/{record}/edit'),
        ];
    }
}
