<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacilityResource\Pages;
use App\Models\Facility;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

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
            Forms\Components\Section::make('Multi Language')
                ->schema([
                    Forms\Components\Tabs::make('Translations')
                        ->tabs([
                            Forms\Components\Tabs\Tab::make('Indonesia (id)')
                                ->schema([
                                    Forms\Components\TextInput::make('name.id')->label('Nama Fasilitas')->required(),
                                    Forms\Components\TextInput::make('type.id')->label('Jenis Fasilitas'),
                                    Forms\Components\Textarea::make('description.id')->label('Deskripsi'),
                                ]),
                            Forms\Components\Tabs\Tab::make('English (en)')
                                ->schema([
                                    Forms\Components\TextInput::make('name.en')->label('Facility Name'),
                                    Forms\Components\TextInput::make('type.en')->label('Facility Type'),
                                    Forms\Components\Textarea::make('description.en')->label('Description'),
                                ]),
                            Forms\Components\Tabs\Tab::make('中文 (zh)')
                                ->schema([
                                    Forms\Components\TextInput::make('name.zh')->label('设施名称'),
                                    Forms\Components\TextInput::make('type.zh')->label('设施类型'),
                                    Forms\Components\Textarea::make('description.zh')->label('描述'),
                                ]),
                            Forms\Components\Tabs\Tab::make('Español (es)')
                                ->schema([
                                    Forms\Components\TextInput::make('name.es')->label('Nombre de la instalación'),
                                    Forms\Components\TextInput::make('type.es')->label('Tipo de instalación'),
                                    Forms\Components\Textarea::make('description.es')->label('Descripción'),
                                ]),
                        ])
                        ->columnSpanFull(),
                ]),

            Forms\Components\FileUpload::make('image')
                ->label('Gambar')
                ->image()
                ->directory('facilities-images')
                ->visibility('public')
                ->disk('public')
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
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->square()
                    ->size(60),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->formatStateUsing(fn ($state) => $state[app()->getLocale()] ?? $state['id'] ?? '-')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->label('Jenis')
                    ->formatStateUsing(fn ($state) => $state[app()->getLocale()] ?? $state['id'] ?? '-')
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

    public static function getRelations(): array
    {
        return [];
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
