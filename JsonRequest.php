<?php

declare(strict_types = 1);

class JsonRequest implements Request
{
    protected $input;

    public function __construct(string $input)
    {
        $this->input = $input;
    }

    public function handle(): Response
    {
        try {
            $inputAsArray = $this->decode();
        } catch (ArgumentException $exception) {
            // log it
            file_put_contents('php://stderr', 'The received data is incorrect');
        }

        $methods = $inputAsArray['methods'] ?? [];
        $text = $inputAsArray['text'] ?? '';

        $manager = new ProcessingManager($methods);

        $result = $manager->manage()->process($text);

        return new JsonResponse(['text' => $result]);
    }

    protected function decode()
    {
        $decoded = json_decode($this->input, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new ArgumentException(json_last_error_msg());
        }

        return $decoded;
    }
}
