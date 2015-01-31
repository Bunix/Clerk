<?php namespace Maatwebsite\Clerk\Adapters\PHPExcel\Html\Elements;

use DOMNode;
use Maatwebsite\Clerk\Adapters\PHPExcel\Html\ReferenceTable;

class TrElement extends Element {

    /**
     * @param DOMNode    $node
     * @param ReferenceTable $table
     * @return mixed|void
     */
    public function parse(DOMNode $node, ReferenceTable &$table)
    {
        // Tr adds a new row
        $table->nextRow();

        $table->setColumn(
            $table->getStartColumn()
        );

        $table->resetContent();

        // Next element
        $this->next($node, $table);
    }
}