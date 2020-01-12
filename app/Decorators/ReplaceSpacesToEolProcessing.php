<?php

declare(strict_types = 1);

namespace App\Decorators;

class ReplaceSpacesToEolProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        $text = parent::process($text);
        return str_replace(' ', PHP_EOL, $text);
    }
}
