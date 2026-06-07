<?php

namespace App\Filament\Resources\ConsumableUnitResource\Pages;

use App\Filament\Resources\ConsumableUnitResource;
use Filament\Resources\Pages\ListRecords;

class Index extends ListRecords
{
    protected static string $resource = ConsumableUnitResource::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-m-arrow-uturn-left';

    protected ?string $heading = '';

    public static function getNavigationLabel(): string
    {
        return __('cat/action.back');
    }
}
