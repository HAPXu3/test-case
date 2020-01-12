<?php

declare(strict_types = 1);

namespace Tests;

use app\PlainProcessing;
use app\decorators\{HtmlspecialcharsProcessing,
    RemoveSpacesProcessing,
    RemoveSymbolsProcessing,
    ReplaceSpacesToEolProcessing,
    StripTagsProcessing,
    ToNumberProcessing};
use PHPUnit\Framework\TestCase;

class MethodTest extends TestCase
{
    public function testHtmlspecialcharsProcessing()
    {
        $plain = new PlainProcessing();

        $htmlspecialchars = new HtmlspecialcharsProcessing($plain);

        $this->assertSame('&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;', $htmlspecialchars->process("<a href='test'>Test</a>"));
    }

    public function testRemoveSpacesProcessing()
    {
        $plain = new PlainProcessing();

        $removeSpaces = new RemoveSpacesProcessing($plain);

        $this->assertSame('many spaces', $removeSpaces->process('many             spaces'));
    }

    public function testRemoveSymbolsProcessing()
    {
        $plain = new PlainProcessing();

        $removeSymbols = new RemoveSymbolsProcessing($plain);

        $this->assertSame('text with dot and another symbols ', $removeSymbols->process('text with dot(.) and $another% symbols /!@#$'));
    }

    public function testReplaceSpacesToEolProcessing()
    {
        $plain = new PlainProcessing();

        $replaceSpacesToEol = new ReplaceSpacesToEolProcessing($plain);

        $this->assertSame('two' . PHP_EOL . 'rows', $replaceSpacesToEol->process('two rows'));
    }

    public function testStripTagsProcessing()
    {
        $plain = new PlainProcessing();

        $stripTags = new StripTagsProcessing($plain);

        $this->assertSame('Параграф. Еще текст', $stripTags->process('<p>Параграф.</p><!-- Комментарий --> <a href="#fragment">Еще текст</a>'));
    }

    public function testToNumberProcessing()
    {
        $plain = new PlainProcessing();

        $toNumber = new ToNumberProcessing($plain);

        $text = <<<TEXT
Привет, мне на <a href=\"test@test.ru\">test</a> пришло приглашение встретиться, попить кофе с <strong>10%</strong> содержанием молока за <i>$5</i>, пойдем вместе!
TEXT;

        $this->assertSame('10', $toNumber->process($text));
    }
}
