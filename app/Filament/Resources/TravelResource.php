<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TravelResource\Pages;
use App\Filament\Resources\TravelResource\RelationManagers;
use App\Models\Packages;
use App\Models\Travel;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput\Mask;

class TravelResource extends Resource
{
    protected static ?string $model = Packages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data';

    protected static ?string $navigationLabel = 'Travel Packages';

    protected static ?string $pluralModelLabel = 'Daftar Travel Packages';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Tabs::make('Translations')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Indonesia')
                        ->schema([
                            Forms\Components\TextInput::make('name.id')
                                ->label('Nama Paket')
                                ->required(),
                            Forms\Components\Textarea::make('description.id')
                                ->label('Deskripsi'),
                            Forms\Components\TextInput::make('price.id')
                                ->label('Harga (IDR)')
                                ->numeric(),
                        ]),
                    Forms\Components\Tabs\Tab::make('English')
                        ->schema([
                            Forms\Components\TextInput::make('name.en')
                                ->label('Package Name'),
                            Forms\Components\Textarea::make('description.en')
                                ->label('Description'),
                            Forms\Components\TextInput::make('price.en')
                                ->label('Price (USD)')
                                ->numeric(),
                        ]),
                    Forms\Components\Tabs\Tab::make('中文')
                        ->schema([
                            Forms\Components\TextInput::make('name.zh')
                                ->label('套餐名称'),
                            Forms\Components\Textarea::make('description.zh')
                                ->label('描述'),
                            Forms\Components\TextInput::make('price.zh')
                                ->label('价格 (元)')
                                ->numeric(),
                        ]),
                    Forms\Components\Tabs\Tab::make('Español')
                        ->schema([
                            Forms\Components\TextInput::make('name.es')
                                ->label('Nombre del Paquete'),
                            Forms\Components\Textarea::make('description.es')
                                ->label('Descripción'),
                            Forms\Components\TextInput::make('price.es')
                                ->label('Precio (EUR/MXN)')
                                ->numeric(),
                        ]),
                ])
                ->columnSpanFull(),

            Forms\Components\Repeater::make('images')
                ->label('Gambar Paket')
                ->relationship('images')
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->label('Gambar')
                        ->image()
                        ->directory('package-images')
                        ->visibility('public')
                        ->preserveFilenames()
                        ->imagePreviewHeight(150),
                ])
                ->columnSpanFull()
                ->addActionLabel('Tambah Gambar')
                ->columns(1),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Paket')
                    ->getStateUsing(fn ($record) => $record->getTranslated('name'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->formatStateUsing(function ($state, $record) {
                        $locale = app()->getLocale();
                        $value = $record->getTranslation('price', $locale) ?? $record->getTranslation('price', 'id');
    
                        if (! $value) {
                            return '-';
                        }
    
                        return match ($locale) {
                            'en' => '$ ' . number_format((float) $value, 2),
                            'zh' => '¥ ' . number_format((float) $value, 2),
                            'es' => '€ ' . number_format((float) $value, 2), // bisa diganti MXN untuk Peso
                            default => 'Rp ' . number_format((float) $value, 0, ',', '.'),
                        };
                    }),

                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->getStateUsing(fn ($record) => $record->getTranslated('description'))
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
            'index' => Pages\ListTravel::route('/'),
            'create' => Pages\CreateTravel::route('/create'),
            'edit' => Pages\EditTravel::route('/{record}/edit'),
        ];
    }
}
