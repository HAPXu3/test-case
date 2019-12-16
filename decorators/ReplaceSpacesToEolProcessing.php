<?php

declare(strict_types = 1);

namespace app\decorators;

class ReplaceSpacesToEolProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        $text = parent::process($text);
        return str_replace(' ', PHP_EOL, $text);
    }
}
