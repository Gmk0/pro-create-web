<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->relationship("Category", "title")
                    ,
                Forms\Components\Textarea::make('description')->columnSpanFull(),
                TiptapEditor::make('content')
    ->profile('default')

    ->output(TiptapOutput::Html) // optional, change the format for saved data, default is html
    ->maxContentWidth('5xl')
    ->required()
                    ->columnSpanFull(),
            SpatieMediaLibraryFileUpload::make('images')->collection("blog")
            ->preserveFilenames()
            ->image()
            ->imageResizeTargetHeight("260")
            ->imageResizeTargetWidth("420")
            ->imageEditor()

            ->imageEditorMode(2)

                ->multiple()
                ->maxFiles(3)
                ->reorderable(),
                Forms\Components\DatePicker::make('published_at'),
                Forms\Components\Toggle::make('is_published'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.title'),
                SpatieMediaLibraryImageColumn::make('images')
    ->collection('blog'),


                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->markdown(),
                Tables\Columns\TextColumn::make('published_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('is_published')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
