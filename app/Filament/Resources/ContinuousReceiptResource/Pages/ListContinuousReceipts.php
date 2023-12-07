<?php

namespace App\Filament\Resources\ContinuousReceiptResource\Pages;

use App\Filament\Resources\ContinuousReceiptResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContinuousReceipts extends ListRecords
{
    protected static string $resource = ContinuousReceiptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
