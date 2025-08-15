<?php

namespace App\Filament\Pages;

use App\Models\Service;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class ManageServicePage extends Page implements HasForms 
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static string $view = 'filament.pages.manage-service-page';

    protected static ?string $navigationGroup = 'Website Settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(Service::firstOrCreate()->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Halaman Layanan')->tabs([
                    Tab::make('Header')->schema([
                        FileUpload::make('breadcumb_bg_image')->label('Background Breadcumb')
                            ->image()->directory('service-page')->nullable(),
                        TextInput::make('breadcumb_title')->label('Breadcumb Title')->required(),
                    ]),
    
                    Tab::make('Selling Area')->schema([
                        TextInput::make('selling_subtitle')->label('Subjudul')->nullable(),
                        TextInput::make('selling_title')->label('Judul')->nullable(),
                        
                        Repeater::make('selling_features')->label('Daftar Fitur Penjualan')
                            ->schema([
                                Textarea::make('text')->label('Teks Fitur')->nullable(),
                            ])->createItemButtonLabel('Tambah Fitur'),

                        Repeater::make('selling_images')->label('Galeri Gambar')
                            ->schema([
                                FileUpload::make('image')->label('Gambar')->image()->directory('service-page')->nullable(),
                            ])->createItemButtonLabel('Tambah Gambar')->columns(2),
                        
                        FileUpload::make('selling_main_image')->label('Gambar Utama')->image()->directory('service-page')->nullable(),
                        FileUpload::make('selling_secondary_image')->label('Gambar Kedua')->image()->directory('service-page')->nullable(),
                    ]),
    
                    Tab::make('Daftar Layanan')->schema([
                        Repeater::make('services')->label('Daftar Layanan')
                            ->schema([
                                FileUpload::make('image')->label('Gambar Layanan')->image()->directory('service-page')->nullable(),
                                FileUpload::make('icon')->label('Ikon Layanan')->image()->directory('service-page')->nullable(),
                                TextInput::make('title')->label('Judul Layanan')->required(),
                                Textarea::make('text')->label('Deskripsi Layanan')->nullable(),
                            ])->createItemButtonLabel('Tambah Layanan')->columns(2),
                    ]),
                ])->columnSpanFull(),
            ])
            ->statePath('data')
            ->model(Service::firstOrCreate());
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan')
                ->submit('save'),
        ];
    }
    
    public function save(): void
    {
        $data = $this->form->getState();
        $record = Service::firstOrCreate();
        $record->update($data);

        Notification::make()
            ->success()
            ->title('Perubahan berhasil disimpan!')
            ->send();
    }
}
