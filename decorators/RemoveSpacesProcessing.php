<?php

declare(strict_types = 1);

class RemoveSpacesProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        $text = parent::process($text);
        return preg_replace("/\s\s+/mu", "\s", $text);
    }
}
