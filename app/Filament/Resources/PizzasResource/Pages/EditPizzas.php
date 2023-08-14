<?php

namespace App\Filament\Resources\PizzasResource\Pages;

use App\Filament\Resources\PizzasResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPizzas extends EditRecord
{
    protected static string $resource = PizzasResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
