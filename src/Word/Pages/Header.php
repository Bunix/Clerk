<?php

namespace Maatwebsite\Clerk\Word\Pages;

use Maatwebsite\Clerk\Traits\CallableTrait;

class Header
{
    use CallableTrait;

    /**
     * @var Text
     */
    protected $text;

    /**
     * @param Text $text
     */
    public function __construct(Text $text)
    {
        $this->text = $text;
    }

    /**
     * @return Text
     */
    public function getText()
    {
        return $this->text->getText();
    }

    /**
     * @return Text
     */
    public function getRawText()
    {
        return $this->text;
    }

    /**
     * @param Text $text
     */
    public function setText(Text $text)
    {
        $this->text = $text;
    }
}
