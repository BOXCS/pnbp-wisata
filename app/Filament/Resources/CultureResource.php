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
                            Forms\Components\TextInput::make('name_id')
                                ->label('Nama Budaya')
                                ->required()
                                ->afterStateHydrated(fn ($set, $record) => $set('name_id', $record?->getTranslation('name', 'id')))
                                ->dehydrateStateUsing(fn ($state, $record) => $record->setTranslation('name', 'id', $state)),
                            Forms\Components\Textarea::make('description_id')
                                ->label('Deskripsi')
                                ->afterStateHydrated(fn ($set, $record) => $set('description_id', $record?->getTranslation('description', 'id')))
                                ->dehydrateStateUsing(fn ($state, $record) => $record->setTranslation('description', 'id', $state)),
                        ]),
                    Forms\Components\Tabs\Tab::make('English')
                        ->schema([
                            Forms\Components\TextInput::make('name_en')
                                ->label('Culture Name')
                                ->afterStateHydrated(fn ($set, $record) => $set('name_en', $record?->getTranslation('name', 'en')))
                                ->dehydrateStateUsing(fn ($state, $record) => $record->setTranslation('name', 'en', $state)),
                            Forms\Components\Textarea::make('description_en')
                                ->label('Description')
                                ->afterStateHydrated(fn ($set, $record) => $set('description_en', $record?->getTranslation('description', 'en')))
                                ->dehydrateStateUsing(fn ($state, $record) => $record->setTranslation('description', 'en', $state)),
                        ]),
                    Forms\Components\Tabs\Tab::make('Español')
                        ->schema([
                            Forms\Components\TextInput::make('name_es')
                                ->label('Nombre de la Cultura')
                                ->afterStateHydrated(fn ($set, $record) => $set('name_es', $record?->getTranslation('name', 'es')))
                                ->dehydrateStateUsing(fn ($state, $record) => $record->setTranslation('name', 'es', $state)),
                            Forms\Components\Textarea::make('description_es')
                                ->label('Descripción')
                                ->afterStateHydrated(fn ($set, $record) => $set('description_es', $record?->getTranslation('description', 'es')))
                                ->dehydrateStateUsing(fn ($state, $record) => $record->setTranslation('description', 'es', $state)),
                        ]),
                    Forms\Components\Tabs\Tab::make('中文')
                        ->schema([
                            Forms\Components\TextInput::make('name_zh')
                                ->label('文化名称')
                                ->afterStateHydrated(fn ($set, $record) => $set('name_zh', $record?->getTranslation('name', 'zh')))
                                ->dehydrateStateUsing(fn ($state, $record) => $record->setTranslation('name', 'zh', $state)),
                            Forms\Components\Textarea::make('description_zh')
                                ->label('描述')
                                ->afterStateHydrated(fn ($set, $record) => $set('description_zh', $record?->getTranslation('description', 'zh')))
                                ->dehydrateStateUsing(fn ($state, $record) => $record->setTranslation('description', 'zh', $state)),
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
                    ->label('Nama Budaya (ID)')
                    ->getStateUsing(fn ($record) => $record->getTranslation('name', 'id'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi (ID)')
                    ->getStateUsing(fn ($record) => $record->getTranslation('description', 'id'))
                    ->limit(30),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->height(50)
                    ->width(50)
                    ->visibility('public'),
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
