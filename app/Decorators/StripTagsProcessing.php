<?php

declare(strict_types = 1);

namespace App\Decorators;

class StripTagsProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        return strip_tags(parent::process($text));
    }
}
