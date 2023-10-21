<?php

namespace App\Filament\Resources;
use App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\BaptizedResource\Pages;
use App\Filament\Resources\BaptizedResource\RelationManagers;
use App\Models\Baptized;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class BaptizedResource extends Resource
{
    protected static ?string $model = Baptized::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationLabel = 'Bautizados';
    protected static ?string $navigationGroup = 'ADMINISTRACION DEL SITEMA';
    protected static ?int $navigationSort = 3;

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
                DatePicker::make('fecha_nacimiento')
                    ->required(),
                TextInput::make('lugar')
                    ->alpha()
                    ->required(),
                TextInput::make('municipio')
                    ->alpha()
                    ->required(),
                TextInput::make('departamento')
                    ->alpha()
                    ->required(),
                Select::make('id_padrino')
                    ->relationship(name: 'godparentt', titleAttribute: 'apellido_uno')
                    ->searchable(['nombre_uno', 'apellido_uno'])
                    ->required(),
                Select::make('id_padre')
                    ->relationship(name: 'parentt', titleAttribute: 'nombre_uno')
                    ->searchable(['nombre_uno'])
                    ->required(),
                Select::make('id_celebrante')
                    ->relationship(name: 'celebrant', titleAttribute: 'nombre')
                    ->searchable(['nombre'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('apellido')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('fecha_nacimiento')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Fecha de creacion'),
                TextColumn::make('godparentt.nombre_uno')
                    ->label('Padrinos'),
                TextColumn::make('parentt.nombre_dos', 'parentt.nombre_dos')
                    ->label('Padres'),
                TextColumn::make('celebrant.nombre')
                   ->label('Celebrante'),
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
            'index' => Pages\ListBaptizeds::route('/'),
            'create' => Pages\CreateBaptized::route('/create'),
            'edit' => Pages\EditBaptized::route('/{record}/edit'),
        ];
    }
}
