<?php

namespace APY\DataGridBundle\Grid\Export;

use PhpOffice\PhpSpreadsheet\Writer\Html;

class HTMLExport extends ExcelExport
{
    protected ?string $fileExtension = "html";
    protected string $mimeType = "text/html";

    protected function getWriter(): Html
    {
        $writer = new Html($this->objPHPExcel);
        $writer->setPreCalculateFormulas(false);

        return $writer;
    }
}
