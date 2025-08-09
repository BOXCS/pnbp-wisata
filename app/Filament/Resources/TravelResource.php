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

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Nama Paket')
                        ->required(),

                    Forms\Components\Textarea::make('description')
                        ->label('Deskripsi'),

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

                    Forms\Components\TextInput::make('price')
                        ->label('Harga')
                        ->prefix('Rp')
                        ->required()
                        ->live(onBlur: false) // format saat user pindah fokus
                        ->afterStateUpdated(function ($state, callable $set) {
                            // Ambil angka saja
                            $numericValue = preg_replace('/[^0-9]/', '', $state);

                            // Format ribuan tanpa koma/desimal
                            if ($numericValue !== '') {
                                $set('price', number_format($numericValue, 0, ',', '.'));
                            } else {
                                $set('price', null);
                            }
                        })
                        ->dehydrateStateUsing(fn($state) => str_replace('.', '', $state)) // simpan hanya angka murni
                        ->rule('numeric'),
                ])
                ->columns(1) // <<-- ini penting supaya semua field vertikal
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Paket')
                    ->searchable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', true),

                Tables\Columns\TextColumn::make('description')
                    ->limit(30),
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
