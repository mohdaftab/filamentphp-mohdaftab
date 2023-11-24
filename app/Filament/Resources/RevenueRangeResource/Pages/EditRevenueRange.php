<?php

namespace App\Filament\Resources\RevenueRangeResource\Pages;

use App\Filament\Resources\RevenueRangeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRevenueRange extends EditRecord
{
    protected static string $resource = RevenueRangeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
