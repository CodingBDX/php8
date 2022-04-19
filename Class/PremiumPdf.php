<?php

namespace Class;

class PremiumPdf implements PdfDownloader
 {
public function DownloadPfd(?int $size = null): string
{
    return 'you are download premium pdf';
}
}