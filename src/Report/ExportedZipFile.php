<?php 

namespace App\Report;

class ExportedZipFile implements ExportedFile
{
    private string $zipFileName;

    public function __construct(string $zipFileName)
    {
        $this->zipFileName = $zipFileName;   
    }

    public function save(ExportedContent $exportedContent): string
    {
        $pathFile = tempnam(sys_get_temp_dir(), "zip-");;

        $zipFile = new \ZipArchive();
        $zipFile->open($pathFile);
        $zipFile->addFromString($this->zipFileName, serialize($exportedContent));
        $zipFile->close();

        return $pathFile;
    }
}