<?php

declare(strict_types = 1);

interface WordProcessing
{
    public function process(string $text): string;
}
