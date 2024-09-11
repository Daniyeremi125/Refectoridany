<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\HtmlElement;

class HtmlElementTest extends TestCase
{
    //* Primer test 
    public function testGeneratesHtml()
    {
        $element = new HtmlElement('p', [], 'Contenido');
        $this->assertSame(
            '<p>Contenido</p>',
            $element->render()
        );
    }
}