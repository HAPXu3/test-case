<?php

declare(strict_types = 1);

class ToNumberProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        $text = parent::process($text);

        preg_match('/([0-9]+)/mu', $text, $matches);

        return $matches[1] ?? $text;
    }
}
