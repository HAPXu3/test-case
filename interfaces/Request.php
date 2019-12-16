<?php

declare(strict_types = 1);

namespace app\interfaces;

interface Request
{
    public function handle(): Response;
}
