<div class="px-2 pb-4 space-y-3">
    {{-- Tombol View Website --}}
    <x-filament::button
        tag="a"
        href="{{ config('app.url') }}"
        target="_blank"
        icon="heroicon-o-globe-alt"
        class="w-full justify-start"
    >
        View Website
    </x-filament::button>

    {{-- Credit --}}
    <div class="text-center text-xs text-gray-500 dark:text-gray-400">
        © {{ date('Y') }} {{ config('app.name') }}. All rights reserved. <br>Created by QTeam
    </div>
</div>
