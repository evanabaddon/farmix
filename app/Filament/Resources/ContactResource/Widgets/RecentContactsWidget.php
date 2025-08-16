<?php

namespace App\Filament\Resources\ContactResource\Widgets;

use Filament\Tables;
use App\Models\Contact;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentContactsWidget extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';


    public function table(Table $table): Table
    {
        return $table
            ->query(
                Contact::latest()->limit(5)
            )
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('subject')
                    ->label('Subjek')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('message')
                    ->searchable()
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        // Only render the tooltip if the column content exceeds the length limit.
                        return $state;
                    }),
                IconColumn::make('is_read')
                    ->label('Sudah Dibaca')
                    ->sortable()
                    ->boolean(),
            ])
            ->actions([
                // Tambahkan Action ini untuk membuat tombol detail
                Action::make('view')
                    ->label('Detail')
                    ->url(fn (Contact $record): string => route('filament.admin.resources.contacts.edit', ['record' => $record]))
                    ->icon('heroicon-o-eye')
                    ->color('primary')
            ]);
    }
}
