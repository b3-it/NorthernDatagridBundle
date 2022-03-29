<?php

namespace APY\DataGridBundle\Grid\Export;

abstract class ExcelPdfExport extends ExcelExport
{
    protected ?string $fileExtension = 'pdf';

    protected string $mimeType = 'application/pdf';

}
