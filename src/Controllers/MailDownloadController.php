<?php

namespace Backstage\FilamentMails\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Backstage\Mails\Models\MailAttachment;

class MailDownloadController extends Controller
{
    public function __invoke(...$arguments)
    {
        if (count($arguments) === 4) {
            [$tenant, $mail, $attachment, $filename] = $arguments;
        } else {
            [$mail, $attachment, $filename] = $arguments;
            $tenant = null;
        }

        $attachmentModel = Config::get('mails.models.attachment');
        /** @var MailAttachment $attachment */
        $attachment = $attachmentModel::find($attachment);

        return $attachment->downloadFileFromStorage();
    }
}
