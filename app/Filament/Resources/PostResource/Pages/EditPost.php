<?php

namespace App\Filament\Resources\PostResource\Pages;

use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        // Ambil data tags dan hapus dari array utama
        $tags = $data['tags'];
        unset($data['tags']);

        // Update postingan
        $this->record->update($data);

        // Sinkronkan tags secara manual
        $tagIds = [];
        foreach ($tags as $tagName) {
            // Temukan atau buat Tag baru
            $tag = \App\Models\Tag::firstOrCreate([
                'name' => $tagName,
                'slug' => \Illuminate\Support\Str::slug($tagName)
            ]);
            $tagIds[] = $tag->id;
        }

        // Sinkronkan relasi tag dengan post
        $this->record->tags()->sync($tagIds);

        return $this->record;
    }
}
