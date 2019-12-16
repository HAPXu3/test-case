<?php

declare(strict_types = 1);

namespace app\interfaces;

interface WordProcessing
{
    public function process(string $text): string;
}
