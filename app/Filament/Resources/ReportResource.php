<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Report;
use App\Models\Sector;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ReportResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ReportResource\RelationManagers;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_report')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('sector_id')
                    ->label('Sektor')
                    ->options(Sector::all()->pluck('sector_name'))
                    ->searchable(),
                Forms\Components\Select::make('project_id')
                    ->label('Proyek')
                    ->options(Project::all()->pluck('project_name'))
                    ->searchable(),
                Forms\Components\DatePicker::make('send_at')
                    ->required(),
                Forms\Components\TextInput::make('realization')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('state_report')
                    ->required()
                    ->maxLength(255)
                    ->default('Draft'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Forms\Components\FileUpload::make('image_report')
                    ->columnSpanFull(),
                Tables\Columns\TextColumn::make('title_report')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('sector_id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('project_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('send_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('realization')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('state_report')
                    ->searchable(),
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
}
