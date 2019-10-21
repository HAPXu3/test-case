<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase
{
    public function testCanCreateDecorators()
    {
        $methods = ['htmlspecialchars', 'removeSpaces', 'removeSymbols'];

        $manager = new ProcessingManager($methods);

        $this->asserTrue(is_subclass_of($manager, WordProcessing::class));

        $methods = ['stripTags', 'replaceSpacesToEol', 'toNumber'];

        $manager = new ProcessingManager($methods);

        $this->asserTrue(is_subclass_of($manager, WordProcessing::class));

        $methods = [];

        $this->asserTrue(is_subclass_of($manager, WordProcessing::class));
    }
}
