<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\GalleryImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $model = GalleryImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Data';
    protected static ?string $navigationLabel = 'Gallery';
    protected static ?string $pluralModelLabel = 'Daftar Gallery';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('gallery_category_id')
                ->label('Kategori')
                ->relationship('category', 'name')
                ->searchable()
                ->preload()
                ->createOptionForm([
                    Forms\Components\TextInput::make('name.id')
                        ->label('Nama Kategori (ID)')
                        ->required(),

                    Forms\Components\TextInput::make('name.en')
                        ->label('Category Name (EN)'),

                    Forms\Components\TextInput::make('name.es')
                        ->label('Nombre de Categoría (ES)'),

                    Forms\Components\TextInput::make('name.zh')
                        ->label('分类名称 (ZH)'),
                ])
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->label('Gambar')
                ->image()
                ->directory('gallery-images')
                ->visibility('public')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')
                ->label('Gambar'),

            Tables\Columns\TextColumn::make('category.name')
                ->label('Kategori')
                ->getStateUsing(fn ($record) => $record->getTranslated('category.name'))
                ->searchable(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
