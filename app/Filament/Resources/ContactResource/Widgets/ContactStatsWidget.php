<?php

namespace App\Filament\Resources\ContactResource\Widgets;

use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ContactStatsWidget extends BaseWidget
{   
    protected int | string | array $columnSpan = 2; 

    protected function getStats(): array
    {
        // Hitung total pesan kontak yang ada di database.
        $totalMessages = Contact::count();

        // Hitung jumlah pesan yang belum dibaca (is_read = false).
        $unreadMessages = Contact::where('is_read', false)->count();

        // Mengembalikan array dari objek Stat.
        return [
            // Kartu pertama: Menampilkan total pesan.
            Stat::make('Total Pesan', $totalMessages)
                ->description('Jumlah total pesan kontak yang diterima.')
                ->color('primary')
                ->icon('heroicon-o-chat-bubble-bottom-center-text'),

            // Kartu kedua: Menampilkan jumlah pesan yang belum dibaca.
            Stat::make('Pesan Belum Dibaca', $unreadMessages)
                ->description('Pesan yang memerlukan perhatian kamu.')
                ->color('danger')
                ->icon('heroicon-o-exclamation-circle'),
        ];
    }
}
