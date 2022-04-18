<?php

namespace Class;

use BadFunctionCallException;

class BasicPdf implements PdfDownloader {

    public function __construct()
    {
        return 'ok';
    }
    public function DownloadPfd($size = 1): string
    {
        return 'pdf download with success';
    }


    // public function DownloadHtml($size = 1): string
    // {
    //     return 'HTML download with success';
    // }
}