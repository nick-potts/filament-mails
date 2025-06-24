<?php

namespace Backstage\FilamentMails;

use Illuminate\Support\Facades\Route;
use Backstage\FilamentMails\Controllers\MailDownloadController;
use Backstage\FilamentMails\Controllers\MailPreviewController;

class FilamentMails
{
    public static function routes(): void
    {
        Route::get('mails/{mail}/preview', MailPreviewController::class)->name('mails.preview');
        Route::get('mails/{mail}/attachment/{attachment}/{filename}', MailDownloadController::class)->name('mails.attachment.download');
    }
}
