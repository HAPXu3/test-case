<?php

declare(strict_types = 1);

namespace app;

use app\decorators\BaseProcessing;
use app\interfaces\WordProcessing;

class ProcessingManager
{
    protected $methods = [];

    public function __construct(array $methods)
    {
        $this->methods = $methods;
    }

    public function manage(): WordProcessing
    {
        $processingChain = new PlainProcessing();

        foreach ($this->methods as $method) {
            $processingChain = $this->createDecorator($method, $processingChain);
        }

        return $processingChain;
    }

    protected function createDecorator(string $name, WordProcessing $wordProcessing): WordProcessing
    {
        $name = ucfirst($name) . 'Processing';

        if (class_exists($name) && is_subclass_of($name, BaseProcessing::class)) {
            return new $name($wordProcessing);
        }

        return $wordProcessing;
    }
}
