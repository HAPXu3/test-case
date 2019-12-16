<?php

declare(strict_types = 1);

namespace app;

use app\interfaces\Response;

class JsonResponse implements Response
{
    protected $output;

    public function __construct(array $response)
    {
        $this->output = $response;
    }

    public function return(): string
    {
        return json_encode($this->output);
    }
}
