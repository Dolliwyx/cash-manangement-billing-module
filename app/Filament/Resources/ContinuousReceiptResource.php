<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContinuousReceiptResource\Pages;
use App\Filament\Resources\ContinuousReceiptResource\RelationManagers;
use App\Models\ContinuousReceipt;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;

class ContinuousReceiptResource extends Resource
{
    protected static ?string $model = ContinuousReceipt::class;

    protected static ?string $navigationIcon = 'lucide-file-text';

    protected static ?string $navigationGroup = 'Collection of Report'; // makes it under the daily report menu

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(4)
                    ->schema([
                        Forms\Components\Section::make('PAYOR INFORMATION')

                        ->schema([
                            Forms\Components\DatePicker::make('REPORT_DATE')
                                ->columnSpan(2)
                                ->label('REPORT DATE'),
                            Forms\Components\TextInput::make('PAYOR')
                                ->columnSpan(2)
                                ->label('PAYOR')
                                ->hint('SURNAME, FIRST NAME M.I.'),
                            Forms\Components\TextInput::make('STUDENT_NUMBER')
                                ->label('STUDENT NUMBER'),
                            Forms\Components\Select::make('COLL')
                                ->label('COLLEGE'),

                        ])->columnSpan(2), 

                        Forms\Components\Section::make('PAYMENT INFORMATION')

                        ->schema([
                            Forms\Components\TextInput::make('OR_NUMBER')
                                ->label('O.R. NUMBER'),
                            Forms\Components\Select::make('CODE')
                                ->label('CODE'),
                            Forms\Components\TextInput::make('AMOUNT')
                                ->label('AMOUNT'),
                            Forms\Components\TextInput::make('TOTAL')
                                ->label('TOTAL'),
                            Forms\Components\TextInput::make('REMARKS')
                                ->columnSpan(2)
                                ->label('REMARKS'),

                        ])->columnSpan(2),

                    ])


            ]);    

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('OR_NUMBER'),
                Tables\Columns\TextColumn::make('PAYOR'),
                Tables\Columns\TextColumn::make('STUDENT_NUMBER'),
                Tables\Columns\TextColumn::make('COLL'),
                Tables\Columns\TextColumn::make('CODE'),
                Tables\Columns\TextColumn::make('AMOUNT'),
                Tables\Columns\TextColumn::make('TOTAL'),
                Tables\Columns\TextColumn::make('REMARKS'),
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
            'index' => Pages\ListContinuousReceipts::route('/'),
            'create' => Pages\CreateContinuousReceipt::route('/create'),
            'edit' => Pages\EditContinuousReceipt::route('/{record}/edit'),
        ];
    }
}
