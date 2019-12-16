<?php

declare(strict_types = 1);

namespace app\decorators;

class StripTagsProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        return strip_tags(parent::process($text));
    }
}
