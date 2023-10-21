<?php

namespace App\Filament\Resources;
use App\Filament\Resources\ParenttResource\Pages;
use App\Filament\Resources\ParenttResource\RelationManagers;
use App\Filament\Resources\ParenttResource\Widgets\ParenttStatsOverview;
use App\Models\Parentt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class ParenttResource extends Resource
{
    protected static ?string $model = Parentt::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Padres';
    protected static ?string $navigationGroup = 'ADMINISTRACION DEL SITEMA';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre_uno')
                    ->required()
                    ->maxLength(100),
                TextInput::make('apellido_uno')
                    ->required()
                    ->maxLength(100),
                TextInput::make('dpi_uno')
                    ->mask('9999 99999 9999')
                    ->placeholder('9999 99999 9999')
                    ->numeric()
                    ->length(13)
                    ->required(),
                TextInput::make('nombre_dos')
                    ->required()
                    ->maxLength(50),
                TextInput::make('apellido_dos')
                    ->required()
                    ->maxLength(50),
                TextInput::make('dpi_dos')
                    ->mask('9999 99999 9999')
                    ->placeholder('9999 99999 9999')
                    ->numeric()
                    ->length(13)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre_uno')->sortable()->searchable()
                ->label('Nombre padre'),
                TextColumn::make('apellido_uno')->sortable()->searchable()
                ->label('Apellido'),
                TextColumn::make('dpi_uno')->sortable()->searchable()
                ->label('DPI'),
                TextColumn::make('nombre_dos')->sortable()->searchable()
                ->label('Nombre Madre'),
                TextColumn::make('apellido_dos')->sortable()->searchable()
                ->label('Apellido'),
                TextColumn::make('dpi_dos')->sortable()->searchable()
                ->label('DPI'),

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
   public static function getWidgets(): array
   {
        return [
            ParenttStatsOverview::class
        ];
   }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListParentts::route('/'),
            'create' => Pages\CreateParentt::route('/create'),
            'edit' => Pages\EditParentt::route('/{record}/edit'),
        ];
    }
}
