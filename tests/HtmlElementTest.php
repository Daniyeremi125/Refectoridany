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



    //* Segundo test 
    public function testGeneratesHtmlElement()
    {
        $element = new HtmlElement('p', ['id' => 'párrafo'], 'Contenido');
        $this->assertSame(
            '<p id="p&aacute;rrafo">Contenido</p>',
            $element->render()
        );
    }

    //* Tercer test 
    public function testGeneratesHtmlElementTag()
    {
        $element = new HtmlElement('img', ['src' => '../public/img/styde.jpg', 'height' => 200],);
        $this->assertSame(
            '<img src="../public/img/styde.jpg" height="200">',
            $element->render()
        );
    }
}