<?php

declare(strict_types = 1);

abstract class BaseProcessing implements WordProcessing
{
    protected $wordProcessing;

    public function __construct(WordProcessing $wordProcessing)
    {
        $this->wordProcessing = $wordProcessing;
    }

    public function process(string $text): string
    {
        return $this->wordProcessing->process($text);
    }
}
