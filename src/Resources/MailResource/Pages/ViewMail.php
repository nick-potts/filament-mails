<?php

namespace Backstage\FilamentMails\Resources\MailResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use Backstage\FilamentMails\Resources\MailResource;

class ViewMail extends ViewRecord
{
    public static function getResource(): string
    {
        return config('filament-mails.resources.mail', MailResource::class);
    }
}
