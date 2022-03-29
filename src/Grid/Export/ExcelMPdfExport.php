<?php

namespace APY\DataGridBundle\Grid\Export;

use PhpOffice\PhpSpreadsheet\Writer\Pdf\Mpdf;

class ExcelMPdfExport extends ExcelPdfExport
{
    protected function getWriter(): Mpdf
    {
        $writer = new Mpdf($this->objPHPExcel);
        $writer->setPreCalculateFormulas(false);

        return $writer;
    }
}
