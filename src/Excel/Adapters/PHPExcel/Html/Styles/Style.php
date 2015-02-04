<?php namespace Maatwebsite\Clerk\Excel\Adapters\PHPExcel\Html\Styles;

use Maatwebsite\Clerk\Excel\Sheet;
use Maatwebsite\Clerk\Excel\Adapters\PHPExcel\Html\ReferenceTable;

abstract class Style {

    /**
     * @var Sheet
     */
    protected $sheet;

    /**
     * @param Sheet $sheet
     */
    public function __construct(Sheet &$sheet)
    {
        $this->sheet = $sheet;
    }

    /**
     * @param                $value
     * @param ReferenceTable $table
     * @return mixed
     */
    abstract public function parse($value, ReferenceTable &$table);
}