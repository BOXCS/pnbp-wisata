<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacilityResource\Pages;
use App\Filament\Resources\FacilityResource\RelationManagers;
use App\Models\Facility;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FacilityResource extends Resource
{
    protected static ?string $model = Facility::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationGroup = 'Data';

    protected static ?string $navigationLabel = 'Fasilitas';

    protected static ?string $pluralModelLabel = 'Daftar Fasilitas';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Nama Fasilitas')
                        ->required(),

                    Forms\Components\TextInput::make('type')
                        ->label('Jenis Fasilitas')
                        ->placeholder('Contoh: Wisata, Penginapan, Transportasi')
                        ->maxLength(255),

                    Forms\Components\Textarea::make('description')
                        ->label('Deskripsi'),

                    Forms\Components\FileUpload::make('image')
                        ->label('Gambar')
                        ->image()
                        ->directory('fasilities-images')
                        ->visibility('public')
                        ->preserveFilenames()
                        ->imagePreviewHeight('250')
                        ->openable()
                        ->downloadable()
                        ->columnSpanFull(),
                ])
                ->columns(1) // <<-- ini penting supaya semua field vertikal
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->square()
                    ->size(60),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->label('Jenis')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                // filter opsional bisa ditambah di sini
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFacilities::route('/'),
            'create' => Pages\CreateFacility::route('/create'),
            'edit' => Pages\EditFacility::route('/{record}/edit'),
        ];
    }
}
