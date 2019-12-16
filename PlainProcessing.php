<?php

declare(strict_types = 1);

namespace app;

use app\interfaces\WordProcessing;

class PlainProcessing implements WordProcessing
{
    public function process(string $text): string
    {
        return $text;
    }
}
