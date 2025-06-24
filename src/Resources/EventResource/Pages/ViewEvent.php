<?php

namespace Backstage\FilamentMails\Resources\EventResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use Backstage\FilamentMails\Resources\EventResource;

class ViewEvent extends ViewRecord
{
    public static function getResource(): string
    {
        return config('filament-mails.resources.event', EventResource::class);
    }
}
