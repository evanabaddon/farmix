<?php

namespace App\Filament\Resources\PostResource\Pages;

use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        // Ambil data tags dan hapus dari array utama agar tidak error saat disimpan
        $tags = $data['tags'];
        unset($data['tags']);

        // Buat postingan baru
        $post = static::getModel()::create($data);

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

        // Sinkronkan relasi tag dengan post yang baru dibuat
        $post->tags()->sync($tagIds);

        return $post;
    }
}
