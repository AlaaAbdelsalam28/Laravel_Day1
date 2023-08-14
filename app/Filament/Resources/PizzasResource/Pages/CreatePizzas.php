<?php

namespace App\Filament\Resources\PizzasResource\Pages;

use App\Filament\Resources\PizzasResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePizzas extends CreateRecord
{
    protected static string $resource = PizzasResource::class;
}
