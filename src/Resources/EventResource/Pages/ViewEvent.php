<?php

namespace Backstage\FilamentMails\Resources\EventResource\Pages;

use Backstage\FilamentMails\Resources\EventResource;
use Filament\Resources\Pages\ViewRecord;

class ViewEvent extends ViewRecord
{
    public static function getResource(): string
    {
        return config('filament-mails.resources.event', EventResource::class);
    }
}
