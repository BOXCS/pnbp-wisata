<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CultureResource\Pages;
use App\Models\Culture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CultureResource extends Resource
{
    protected static ?string $model = Culture::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Data';
    protected static ?string $navigationLabel = 'Budaya';
    protected static ?string $pluralModelLabel = 'Daftar Budaya';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Tabs::make('Translatable')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Indonesia')
                        ->schema([
                            Forms\Components\TextInput::make('name.id')
                                ->label('Nama Budaya')
                                ->required(),

                            Forms\Components\Textarea::make('description.id')
                                ->label('Deskripsi'),
                        ]),
                    Forms\Components\Tabs\Tab::make('English')
                        ->schema([
                            Forms\Components\TextInput::make('name.en')
                                ->label('Culture Name'),

                            Forms\Components\Textarea::make('description.en')
                                ->label('Description'),
                        ]),
                    Forms\Components\Tabs\Tab::make('Español')
                        ->schema([
                            Forms\Components\TextInput::make('name.es')
                                ->label('Nombre de la Cultura'),

                            Forms\Components\Textarea::make('description.es')
                                ->label('Descripción'),
                        ]),
                    Forms\Components\Tabs\Tab::make('中文')
                        ->schema([
                            Forms\Components\TextInput::make('name.zh')
                                ->label('文化名称'),

                            Forms\Components\Textarea::make('description.zh')
                                ->label('描述'),
                        ]),
                ])
                ->columnSpanFull(),

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
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Budaya')
                    ->getStateUsing(fn ($record) => $record->getTranslated('name'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->getStateUsing(fn ($record) => $record->getTranslated('description')),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->height(50)
                    ->width(50),
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
