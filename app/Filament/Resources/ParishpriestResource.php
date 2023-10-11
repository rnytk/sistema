<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParishpriestResource\Pages;
use App\Filament\Resources\ParishpriestResource\RelationManagers;
use App\Models\Parishpriest;
use Filament\Forms;
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
                 TextInput::make('nombre'),
                TextInput::make('apellido'),
                 TextInput::make('dpi'),
                  TextInput::make('estado'),
               
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
