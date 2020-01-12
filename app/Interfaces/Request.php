<?php

declare(strict_types = 1);

namespace App\Interfaces;

interface Request
{
    public function handle(): Response;
}
