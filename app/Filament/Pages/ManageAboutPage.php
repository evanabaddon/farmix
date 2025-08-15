<?php

namespace App\Filament\Pages;

use App\Models\About;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Concerns\InteractsWithForms;

class ManageAboutPage extends Page implements HasForms 
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static string $view = 'filament.pages.manage-about-page';
    
    protected static ?string $navigationGroup = 'Website Settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(About::firstOrCreate()->attributesToArray());
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Halaman About')->tabs([
                    Tab::make('Header')->schema([
                        FileUpload::make('breadcumb_bg_image')->label('Background Breadcumb')
                            ->image()->directory('about-page')->nullable(),
                        TextInput::make('breadcumb_title')->label('Breadcumb Title')->required(),
                    ]),
    
                    Tab::make('Section About')->schema([
                        FileUpload::make('about_image')->label('Image About')
                            ->image()->directory('about-page')->nullable(),
                        TextInput::make('about_subtitle')->label('Subtitle')->nullable(),
                        TextInput::make('about_title')->label('Title')->nullable(),
                        RichEditor::make('about_text')->label('Content')->nullable(),
                        
                        FileUpload::make('author_image')->label('Author Photo')->image()->directory('about-page')->nullable(),
                        TextInput::make('author_name')->label('Author Name')->nullable(),
                        TextInput::make('author_designation')->label('Author Job')->nullable(),
                        FileUpload::make('author_signature_image')->label('Author Signature')
                            ->image()->directory('about-page')->nullable(),
    
                        FileUpload::make('about_video_image')->label('Thumnbnail Video')
                            ->image()->directory('about-page')->nullable(),
                        TextInput::make('about_video_url')->label('URL Video Youtube')->nullable(),
                        
                        Repeater::make('about_features')->label('About Feature')
                            ->schema([
                                FileUpload::make('icon')->label('Icon')->image()->directory('about-page')->nullable(),
                                TextInput::make('title')->label('Judul Fitur')->required(),
                                Textarea::make('text')->label('Deskripsi Fitur')->nullable(),
                            ])->columns(2)->createItemButtonLabel('Tambah Fitur')->maxItems(2),
                    ]),
    
                    Tab::make('Process Area')->schema([
                        TextInput::make('process_subtitle')->label('Subjudul')->nullable(),
                        TextInput::make('process_title')->label('Judul')->nullable(),
                        
                        Repeater::make('agricultural_work_steps')->label('Langkah-langkah Kerja')
                            ->schema([
                                FileUpload::make('image')->label('Gambar Langkah')->image()->directory('about-page')->nullable(),
                                TextInput::make('title')->label('Judul Langkah')->required(),
                                Textarea::make('text')->label('Deskripsi Langkah')->nullable(),
                            ])->createItemButtonLabel('Tambah Langkah')->columns(2),
                    ]),
    
                    Tab::make('History Proyek')->schema([
                        TextInput::make('history_subtitle')->label('Subjudul')->nullable(),
                        TextInput::make('history_title')->label('Judul')->nullable(),
                        
                        Repeater::make('history_works')->label('Daftar Proyek')
                            ->schema([
                                TextInput::make('title')->label('Judul Proyek')->required(),
                                Textarea::make('text')->label('Deskripsi Proyek')->nullable(),
                                TextInput::make('year')->label('Tahun Proyek')->numeric()->required(),
                            ])->createItemButtonLabel('Tambah Proyek'),
                    ]),
    
                    Tab::make('Counter & Statistik')->schema([
                        FileUpload::make('counter_bg_image')->label('Background Counter')
                            ->image()->directory('about-page')->nullable(),
                        TextInput::make('counter_title')->label('Judul Counter')->nullable(),
                        Textarea::make('counter_subtitle')->label('Subjudul Counter')->nullable(),
                        TextInput::make('counter_button_text')->label('Teks Tombol')->nullable(),
                        TextInput::make('counter_button_url')->label('URL Tombol')->nullable(),
                        
                        Repeater::make('counters')->label('Daftar Counter')
                            ->schema([
                                FileUpload::make('icon')->label('Ikon Counter')->image()->directory('about-page')->nullable(),
                                TextInput::make('count')->label('Nilai Counter')->numeric()->required(),
                                TextInput::make('text')->label('Teks Counter')->required(),
                            ])->createItemButtonLabel('Tambah Counter'),
                    ]),
    
                    Tab::make('Testimonial')->schema([
                        TextInput::make('testimonial_subtitle')->label('Subjudul Testimonial')->nullable(),
                        TextInput::make('testimonial_title')->label('Judul Testimonial')->nullable(),
                        FileUpload::make('testimonial_image')->label('Gambar Testimonial')
                            ->image()->directory('about-page')->nullable(),
                        
                        Repeater::make('testimonials')->label('Daftar Testimonial')
                            ->schema([
                                FileUpload::make('author_image')->label('Foto Klien')->image()->directory('about-page')->nullable(),
                                TextInput::make('author_name')->label('Nama Klien')->required(),
                                TextInput::make('author_designation')->label('Jabatan Klien')->nullable(),
                                RichEditor::make('text')->label('Isi Testimonial')->required(),
                            ])->createItemButtonLabel('Tambah Testimonial'),
                    ]),
                ])->columnSpanFull(),
            ])
            ->statePath('data')
            ->model(About::firstOrCreate());
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save')
                ->submit('save'),
        ];
    }
    
    public function save(): void
    {
        $data = $this->form->getState();
        $record = About::firstOrCreate();
        $record->update($data);

        Notification::make()
            ->success()
            ->title('Perubahan berhasil disimpan!')
            ->send();
    }

}
