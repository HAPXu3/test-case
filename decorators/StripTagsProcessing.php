<?php

declare(strict_types = 1);

class StripTagsProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        return strip_tags(parent::process($text));
    }
}
