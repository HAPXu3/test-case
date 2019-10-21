<?php

declare(strict_types = 1);

class ReplaceSpacesToEolProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        $text = parent::process($text);
        return str_replace("\s", PHP_EOL, $text);
    }
}
