<?php

namespace Backstage\FilamentMails\Resources\SuppressionResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Backstage\FilamentMails\Resources\SuppressionResource;

class ListSuppressions extends ListRecords
{
    protected static string $resource = SuppressionResource::class;

    public function getTitle(): string
    {
        return __('Suppressions');
    }
}
