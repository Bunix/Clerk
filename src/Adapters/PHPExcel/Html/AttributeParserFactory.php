<?php namespace Maatwebsite\Clerk\Adapters\PHPExcel\Html;

use Maatwebsite\Clerk\Sheet;
use Maatwebsite\Clerk\Adapters\PHPExcel\Html\Attributes\Attribute;

class AttributeParserFactory {

    /**
     * @param string $attribute
     * @param Sheet  $sheet
     * @return Attribute|null
     */
    public static function create($attribute, Sheet $sheet)
    {
        $class = self::getClass($attribute);

        if ( class_exists($class) )
            return new $class($sheet);
    }

    /**
     * @param string $attribute
     * @return string
     */
    protected static function getClass($attribute)
    {
        return __NAMESPACE__ . '\\Attributes\\' . ucfirst(strtolower($attribute)) . 'Attribute';
    }
}