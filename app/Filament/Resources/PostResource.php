<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: false)
                        ->afterStateUpdated(function (string $operation,string $state, Set $set){
                            if ($operation === 'create') {
                                $set('slug', Str::slug($state));
                            }
                        })
                        ->lazy(),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                FileUpload::make('featured_image')
                    ->label('Featured Image')
                    ->image()
                    ->directory('blog-featured-images')
                    ->nullable(),
                Select::make('blog_category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required()
                    ->preload(),
                TextInput::make('author')->nullable(),
                RichEditor::make('body')->required()->columnSpanFull(),
                TextInput::make('meta_description')->nullable()->columnSpanFull(),
                TagsInput::make('tags') // Gunakan TagsInput yang sudah diimpor**
                        ->label('Tags'),
                DateTimePicker::make('published_at')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('category.name')->label('Category')->searchable()->sortable(),
                TextColumn::make('author')->searchable()->sortable(),
                TextColumn::make('published_at')->dateTime()->sortable(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
