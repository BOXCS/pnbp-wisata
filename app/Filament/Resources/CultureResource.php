<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CultureResource\Pages;
use App\Filament\Resources\CultureResource\RelationManagers;
use App\Models\Culture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CultureResource extends Resource
{
    protected static ?string $model = Culture::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Budaya';
    protected static ?string $pluralModelLabel = 'Daftar Budaya';

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
                        ->label('Nama Budaya')
                        ->required(),

                    Forms\Components\Textarea::make('description')
                        ->label('Deskripsi'),

                    Forms\Components\FileUpload::make('image')
                        ->label('Gambar')
                        ->image()
                        ->directory('budaya-images')
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
                Tables\Columns\TextColumn::make('name')
                ->label('Nama Budaya')
                ->searchable(),

                Tables\Columns\TextColumn::make('description')
                ->label('Deskripsi')
                ->limit(30),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public') // pastikan menggunakan disk yang benar
                    ->height(50) // atur tinggi gambar
                    ->width(50) // atur lebar gambar
                    ->visibility('public'), // pastikan visibility public
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCultures::route('/'),
            'create' => Pages\CreateCulture::route('/create'),
            'edit' => Pages\EditCulture::route('/{record}/edit'),
        ];
    }
}
