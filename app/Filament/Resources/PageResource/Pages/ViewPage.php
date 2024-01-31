<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewPage extends ViewRecord
{
    protected static string $resource = PageResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
//                TextEntry::make('content'),
//                TextEntry::make('book.title')
//                    ->label('Book title'),
                TextEntry::make('book.description')
                    ->label('Book description')
                    ->placeholder('SHOULD BE SHOWN'), // Placeholder not showing, even though description is null
            ]);
    }
}
