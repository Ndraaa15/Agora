<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketSectionResource\Pages;
use App\Filament\Resources\TicketSectionResource\RelationManagers;
use App\Models\TicketSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;






class TicketSectionResource extends Resource
{
    protected static ?string $model = TicketSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('event_id')
                    ->label('Event')
                    ->options(\App\Models\Event::all()->pluck('name', 'id'))
                    ->required(),
                TextInput::make('name')
                    ->label('Name')
                    ->required(),
                TextArea::make('description')
                    ->label('Description')
                    ->required(),
                TextInput::make('quantity')
                    ->label('Quantity')
                    ->required(),
                TextInput::make('price')
                    ->label('Price')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('event.name')
                    ->label('Event')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Name'),
                TextColumn::make('description')
                    ->label('Description'),
                TextColumn::make('quantity')
                    ->label('Quantity'),
                TextColumn::make('price')
                    ->label('Price'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListTicketSections::route('/'),
            'create' => Pages\CreateTicketSection::route('/create'),
            'edit' => Pages\EditTicketSection::route('/{record}/edit'),
        ];
    }
}
