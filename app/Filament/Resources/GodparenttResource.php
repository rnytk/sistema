<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GodparenttResource\Pages;
use App\Filament\Resources\GodparenttResource\RelationManagers;
use App\Models\Godparentt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class GodparenttResource extends Resource
{
    protected static ?string $model = Godparentt::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Padrinos';
    protected static ?string $navigationGroup = 'ADMINISTRACION DEL SITEMA';
    protected static ?int $navigationSort = 2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre_uno')
                    ->alpha()
                    ->required(),
                TextInput::make('apellido_uno')
                    ->alpha()
                    ->required(),
                TextInput::make('dpi_uno')
                    ->mask('9999 99999 9999')
                    ->placeholder('9999 99999 9999')
                    ->numeric()
                    ->length(13),
                TextInput::make('nombre_dos')
                    ->alpha()
                    ->required(),
                TextInput::make('apellido_dos')
                    ->alpha()
                    ->required(),
                TextInput::make('dpi_dos')
                    ->mask('9999 99999 9999')
                    ->placeholder('9999 99999 9999')
                    ->numeric()
                    ->length(13),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre_uno')
                    ->sortable()
                    ->searchable()
                    ->label('Nombre Padrino') ,
                TextColumn::make('apellido_uno')
                    ->sortable()
                    ->searchable()
                    ->label('Apellido Padrino') ,
                TextColumn::make('dpi_uno')
                    ->sortable()
                    ->searchable()
                    ->label('DPI'),
                TextColumn::make('nombre_dos')
                    ->sortable()
                    ->searchable()
                    ->label('Nombre madrina'),
                TextColumn::make('apellido_dos')
                    ->sortable()
                    ->searchable()
                    ->label('Apellido madrina'),
                TextColumn::make('dpi_dos')
                    ->sortable()
                    ->searchable()
                    ->label('DPI')
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
            'index' => Pages\ListGodparentts::route('/'),
            'create' => Pages\CreateGodparentt::route('/create'),
            'edit' => Pages\EditGodparentt::route('/{record}/edit'),
        ];
    }
}
