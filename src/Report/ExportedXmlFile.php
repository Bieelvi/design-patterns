<?php 

namespace App\Report;

class ExportedXmlFile implements ExportedFile
{
    private string $elementName;

    public function __construct(string $elementName)
    {
        $this->elementName = $elementName;   
    }

    public function save(ExportedContent $exportedContent): string
    {
        $pathFile = tempnam(sys_get_temp_dir(), "xml-");

        $xmlElement = new \SimpleXMLElement("<{$this->elementName} />");
        foreach ($exportedContent->content() as $key => $value) {
            $xmlElement->addChild($key, $value);
        }

        $xmlElement->asXML($pathFile);

        return $pathFile;
    }
}