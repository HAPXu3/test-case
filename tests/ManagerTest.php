<?php

declare(strict_types = 1);

namespace Tests;

use app\ProcessingManager;
use app\interfaces\WordProcessing;
use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase
{
    public function testCanCreateDecorators()
    {
        $methods = ['htmlspecialchars', 'removeSpaces', 'removeSymbols'];

        $manager = new ProcessingManager($methods);

        $this->assertTrue(is_subclass_of($manager->manage(), WordProcessing::class));

        $methods = ['stripTags', 'replaceSpacesToEol', 'toNumber'];

        $manager = new ProcessingManager($methods);

        $this->assertTrue(is_subclass_of($manager->manage(), WordProcessing::class));

        $methods = [];

        $manager = new ProcessingManager($methods);

        $this->assertTrue(is_subclass_of($manager->manage(), WordProcessing::class));
    }
}
