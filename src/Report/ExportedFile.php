<?php 

namespace App\Report;

interface ExportedFile
{
    public function save(ExportedContent $exportedContent): string;
}