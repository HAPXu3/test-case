<?php

declare(strict_types = 1);

interface Request
{
    public function handle(): Response;
}
