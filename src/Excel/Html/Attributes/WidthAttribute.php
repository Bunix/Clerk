<?php

namespace Maatwebsite\Clerk\Excel\Html\Attributes;

use DOMAttr;
use Maatwebsite\Clerk\Excel\Html\ReferenceTable;

class WidthAttribute extends Attribute
{
    /**
     * @param DOMAttr        $attribute
     * @param ReferenceTable $table
     *
     * @return mixed
     */
    public function parse(DOMAttr $attribute, ReferenceTable & $table)
    {
        $this->sheet->setColumnWidth(
            $table->getColumn(),
            $attribute->value
        );
    }
}
