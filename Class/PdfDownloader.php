<?php

namespace Class;

interface PdfDownloader 
{
    // public const SIZE = 0;

    // public function __construct();

    public function DownloadPfd(?int $size = null): string;
      
}