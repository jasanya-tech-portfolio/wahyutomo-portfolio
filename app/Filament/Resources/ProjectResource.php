<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Tools;
use App\Models\Client;
use App\Models\Status;
use App\Models\Project;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationLabel = 'Project';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(3)
                    ->schema([
                        Select::make('categories') // harus sama dengan nama relasi
                            ->multiple()
                            ->relationship('categories', 'name')
                            ->label('Categories')
                            ->searchable()
                            ->required(),
                        Select::make('client_id')
                            ->required()
                            ->label('Client')
                            ->searchable()
                            ->options(Client::all()->pluck('name', 'id')),
                        Select::make('tools')
                            ->multiple()
                            ->relationship('tools', 'name')
                            ->label('Tools')
                            ->searchable()
                            ->options(Tools::limit(5)->pluck('name', 'id'))
                            ->getSearchResultsUsing(function (string $search) {
                                return Tools::where('name', 'like', "%{$search}%")
                                    ->limit(5)
                                    ->pluck('name', 'id')
                                    ->toArray();
                            })
                            ->getOptionLabelUsing(function ($value) {
                                return Tools::find($value)?->name;
                            })
                            ->required(),
                    ]),
                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->required()
                    ->directory('project')
                    ->columnSpanFull(),
                TextInput::make('name')
                    ->required()
                    ->label('Name')
                    ->columnSpanFull()
                    ->maxLength(128),
                RichEditor::make('body')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->multiple()
                    ->directory('project')
                    ->columnSpanFull()
                    ->required(),
                DatePicker::make('start_project')
                    ->required()
                    ->native(false),
                DatePicker::make('end_project')
                    ->required()
                    ->native(false),
                Select::make('status_id')
                    ->required()
                    ->label('Status')
                    ->columnSpanFull()
                    ->searchable()
                    ->options(Status::all()->pluck('name', 'id')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label('Category'),
                TextColumn::make('client.name')
                    ->label('Client'),
                TextColumn::make('tools.name')
                    ->label('Tools'),
                ImageColumn::make('thumbnail'),
                ImageColumn::make('image'),
                TextColumn::make('start_project')
                    ->date()
                    ->sortable(),
                TextColumn::make('end_project')
                    ->date()
                    ->sortable(),
                TextColumn::make('status.name')
                    ->sortable(),
                TextColumn::make('createdBy.name')
                    ->label('Created By'),
                TextColumn::make('updatedBy.name')
                    ->label("Updated by"),
                TextColumn::make('deletedBy.name')
                    ->label("Deleted by"),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
