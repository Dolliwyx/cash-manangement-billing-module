<?php

namespace App\Filament\Resources\ManualReceiptResource\Pages;

use App\Filament\Resources\ManualReceiptResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditManualReceipt extends EditRecord
{
    protected static string $resource = ManualReceiptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
