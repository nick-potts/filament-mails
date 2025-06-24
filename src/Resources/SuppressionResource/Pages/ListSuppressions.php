<?php

namespace Backstage\FilamentMails\Resources\SuppressionResource\Pages;

use Backstage\FilamentMails\Resources\SuppressionResource;
use Filament\Resources\Pages\ListRecords;

class ListSuppressions extends ListRecords
{
    protected static string $resource = SuppressionResource::class;

    public function getTitle(): string
    {
        return __('Suppressions');
    }
}
