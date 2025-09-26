<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UploadLinkResource\Pages;
use App\Filament\Resources\UploadLinkResource\RelationManagers;
use App\Models\UploadLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UploadLinkResource extends Resource
{
    protected static ?string $model = UploadLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->directory('upload-links') // simpan di storage/app/public/upload-links
                    ->image()
                    ->imageEditor()
                    ->maxSize(2048),

                Forms\Components\TextInput::make('link')
                    ->label('Embed Link')
                    ->url()
                    ->prefixIcon('heroicon-o-link'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->square()
                    ->label('Image'),

                Tables\Columns\TextColumn::make('link')
                    ->label('Embed Link')
                    ->limit(50)
                    ->url(fn($record) => $record->link, true),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUploadLinks::route('/'),
            'create' => Pages\CreateUploadLink::route('/create'),
            'edit' => Pages\EditUploadLink::route('/{record}/edit'),
        ];
    }
}
