<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PizzasResource\Pages;
use App\Filament\Resources\PizzasResource\RelationManagers;
use App\Models\Category;
use App\Models\Pizzas;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PizzasResource extends Resource
{
    protected static ?string $model = Pizzas::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('pizza-name')
                    ->label('Pizza Name')
                    ->required(),
                Forms\Components\TextInput::make('extra')
                    ->label('Extra')
                    ->required(),
                    Forms\Components\Select::make('cat_id')
                    ->label('Category')
                    ->options(
                        Category::pluck('name', 'id')->toArray()
                    )
                    ->placeholder('Select a category')
                    ->required(),
                Forms\Components\Select::make('size')
                ->label('Size')
                ->options([
                    'Small' => 'Small',
                    'Medium' => 'Medium',
                    'Large' => 'Large',
                    'X-Large' => 'X-Large',
                ])
                ->placeholder('Select a size')
                ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Price')
                    ->required(),
            ]);
            
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('pizza-name'),
            TextColumn::make('extra'),
            TextColumn::make('cat_id'),
            TextColumn::make('size'),
            TextColumn::make('price'),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPizzas::route('/'),
            'create' => Pages\CreatePizzas::route('/create'),
            'edit' => Pages\EditPizzas::route('/{record}/edit'),
        ];
    }    
}
