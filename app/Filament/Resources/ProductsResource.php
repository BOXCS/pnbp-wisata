<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift-top';
    protected static ?string $navigationGroup = 'Data';
    protected static ?string $navigationLabel = 'Produk';
    protected static ?string $pluralModelLabel = 'Daftar Produk';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Tabs::make('Translations')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Indonesia (id)')
                        ->schema([
                            Forms\Components\TextInput::make('name.id')
                                ->label('Nama Produk')
                                ->required(),
                            Forms\Components\TextInput::make('type.id')
                                ->label('Jenis Produk')
                                ->placeholder('Contoh: Wisata, Penginapan, Transportasi'),
                            Forms\Components\Textarea::make('description.id')
                                ->label('Deskripsi'),
                        ]),

                    Forms\Components\Tabs\Tab::make('English (en)')
                        ->schema([
                            Forms\Components\TextInput::make('name.en')
                                ->label('Product Name'),
                            Forms\Components\TextInput::make('type.en')
                                ->label('Product Type'),
                            Forms\Components\Textarea::make('description.en')
                                ->label('Description'),
                        ]),

                    Forms\Components\Tabs\Tab::make('中文 (zh)')
                        ->schema([
                            Forms\Components\TextInput::make('name.zh')
                                ->label('产品名称'),
                            Forms\Components\TextInput::make('type.zh')
                                ->label('产品类别'),
                            Forms\Components\Textarea::make('description.zh')
                                ->label('描述'),
                        ]),

                    Forms\Components\Tabs\Tab::make('Español (es)')
                        ->schema([
                            Forms\Components\TextInput::make('name.es')
                                ->label('Nombre del Producto'),
                            Forms\Components\TextInput::make('type.es')
                                ->label('Tipo de Producto'),
                            Forms\Components\Textarea::make('description.es')
                                ->label('Descripción'),
                        ]),
                ])
                ->columnSpanFull(),

            Forms\Components\FileUpload::make('image')
                ->label('Gambar')
                ->image()
                ->directory('product-images')
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
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')
                ->label('Gambar')
                ->square()
                ->size(60),

            Tables\Columns\TextColumn::make('name')
                ->label('Nama')
                ->getStateUsing(fn ($record) => $record->getTranslated('name'))
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('type')
                ->label('Jenis')
                ->getStateUsing(fn ($record) => $record->getTranslated('type'))
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime('d M Y')
                ->sortable(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
