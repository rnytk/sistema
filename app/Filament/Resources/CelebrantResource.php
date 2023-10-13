<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CelebrantResource\Pages;
use App\Filament\Resources\CelebrantResource\RelationManagers;
use App\Models\Celebrant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class CelebrantResource extends Resource
{
    protected static ?string $model = Celebrant::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Celebrante';
    protected static ?string $navigationGroup = 'ADMINISTRACION DEL SITEMA';
    protected static ?int $navigationSort = 5;

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
                TextColumn::make('nombre')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('apellido')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('dpi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('estado')
                    ->sortable()
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
            'index' => Pages\ListCelebrants::route('/'),
            'create' => Pages\CreateCelebrant::route('/create'),
            'edit' => Pages\EditCelebrant::route('/{record}/edit'),
        ];
    }
}
