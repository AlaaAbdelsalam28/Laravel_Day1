<?php

namespace App\Filament\Resources\PizzasResource\Pages;

use App\Filament\Resources\PizzasResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPizzas extends ListRecords
{
    protected static string $resource = PizzasResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
