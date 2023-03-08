<?php

declare(strict_types=1);

namespace App\Filament\Event;

use App\Domain\Event\Models\Event;
use App\Filament\Event\Pages\CreateEvent;
use App\Filament\Event\Pages\EditEvent;
use App\Filament\Event\Pages\ListEvents;
use App\Filament\Event\Pages\ViewEvent;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')->required(),
                TextInput::make('title')->required(),
                TextInput::make('amount_done')->integer(),
                DatePicker::make('start_on'),
                DatePicker::make('end_on'),
                Repeater::make('donationGoals')->relationship()->schema([
                    TextInput::make('value')->integer(),
                    TextInput::make('title')->required(),
                    Checkbox::make('is_completed')->default(false),
                    Checkbox::make('is_every')->default(false),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('amount_done'),
                Tables\Columns\TextColumn::make('start_on')->date(),
                Tables\Columns\TextColumn::make('end_on')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'edit' => EditEvent::route('/{record}/edit'),
            'view' => ViewEvent::route('/{record}'),
        ];
    }
}
