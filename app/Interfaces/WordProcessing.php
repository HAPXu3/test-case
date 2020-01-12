<?php

declare(strict_types = 1);

namespace App\Interfaces;

interface WordProcessing
{
    public function process(string $text): string;
}
