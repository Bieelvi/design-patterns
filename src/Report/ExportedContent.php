<?php 

namespace App\Report;

interface ExportedContent
{
    public function content(): array;
}