<?php namespace Maatwebsite\Clerk\Adapters\PHPExcel\Writers;

use Maatwebsite\Clerk\Writer as WriterInterface;
use PHPExcel_Writer_IWriter;

/**
 * Class CsvWriter
 * @package Maatwebsite\Clerk\Adapters\PHPExcel
 */
class CsvWriter extends Writer implements WriterInterface {

    /**
     * @return PHPExcel_Writer_IWriter
     */
    protected function createWriter()
    {
        $writer = new \PHPExcel_Writer_CSV(
            $this->convertToDriver($this->getWorkbook())
        );

        if ( $this->getType() == 'CSV' )
        {
            $writer->setDelimiter($this->workbook->getDelimiter());
            $writer->setEnclosure($this->workbook->getEnclosure());
            $writer->setLineEnding($this->workbook->getLineEnding());
        }

        return $writer;
    }
}