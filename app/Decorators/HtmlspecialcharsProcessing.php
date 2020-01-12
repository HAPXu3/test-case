<?php

declare(strict_types = 1);

namespace App\Decorators;

class HtmlspecialcharsProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        return htmlspecialchars(parent::process($text), ENT_QUOTES);
    }
}
