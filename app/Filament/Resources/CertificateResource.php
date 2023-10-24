<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificateResource\Pages;
use App\Filament\Resources\CertificateResource\RelationManagers;
use App\Models\Certificate;
use Filament\Actions\Modal\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Tables\Columns\TextColumn;

class CertificateResource extends Resource
{
    protected static ?string $model = Certificate::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Certificado';
    protected static ?string $navigationGroup = 'ADMINISTRACION DEL SITEMA';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('fecha_bautismo')
                    ->required(),
                TextInput::make('lugar_bautismo')
                    // ->alphaNum()
                    ->required(),
                TextInput::make('no_libro')
                    ->alphaNum()
                    ->required(),
                TextInput::make('no_folio')
                    ->alphaNum()
                    ->required(),
                TextInput::make('id_bautizado')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('baptized.nombre')->sortable()->searchable()
                    ->label('Nombres'),
                TextColumn::make('baptized.apellido')
                    ->label('Apellido'),
                // TextColumn::make('baptized')
                //     ->label('Nombre'),
                TextColumn::make('fecha_bautismo')->sortable()->dateTime('d-M-Y'),
                TextColumn::make('lugar_bautismo')->sortable(),
                TextColumn::make('no_libro')->sortable(),
                TextColumn::make('no_folio')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            // Action::make('Dowload Pdf'),
            // ->icon('heroicon-o-docuemtn-dowload')
            // ->link(fn(Certificate $record)=> route('certificate.pdf, $tr'))

                Tables\Actions\Action::make('Dowload Pdf')
                ->icon('heroicon-o-arrow-down-tray'),
                


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
            'index' => Pages\ListCertificates::route('/'),
            'create' => Pages\CreateCertificate::route('/create'),
            'edit' => Pages\EditCertificate::route('/{record}/edit'),
        ];
    }
}
