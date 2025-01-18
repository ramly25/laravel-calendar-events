<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Models\Game;
use App\Models\League;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('league_id')
                    ->options(League::all()->pluck('name', 'id'))
                    ->required(),
                Forms\Components\Select::make('team1_id')
                    ->options(Team::all()->pluck('name', 'id'))
                    ->required(),
                Forms\Components\Select::make('team2_id')
                    ->options(Team::all()->pluck('name', 'id'))
                    ->required(),
                Forms\Components\DateTimePicker::make('game_date')
                    ->required(),
                Forms\Components\TextInput::make('vanue')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('league.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('teamOne.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('teamTwo.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('game_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vanue')
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
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }
}
