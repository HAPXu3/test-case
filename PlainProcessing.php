<?php

declare(strict_types = 1);

class PlainProcessing implements WordProcessing
{
    public function process(string $text): string
    {
        return $text;
    }
}
