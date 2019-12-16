<?php

declare(strict_types = 1);

class HtmlspecialcharsProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        return htmlspecialchars(parent::process($text), ENT_QUOTES);
    }
}
