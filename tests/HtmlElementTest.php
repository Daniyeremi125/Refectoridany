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
        $element = new HtmlElement('img', ['src' => '../public/img/gato.jpg', 'height' => 200],);
        $this->assertSame(
            '<img src="../public/img/gato.jpg" height="200">',
            $element->render()
        );
    }
        // Cuarto test 
        public function testGeneratesHtmlElementInputs()
        {
            $element = new HtmlElement('input', ['required'],);
            $this->assertSame(
                '<input required>',
                $element->render()
            );
        }
    
        // Quinto test 
        public function testCheckElementVoid()
        {
            $this->assertFalse((new HtmlElement('p'))->isVoid());
            $this->assertTrue((new HtmlElement('img'))->isVoid());
        }

         // Sexto test 
    public function testGenerateAttributes()
    {
        $element = new HtmlElement('span', ['class' => 'a_span', 'id' => 'the_span']);
        $this->assertSame(' class="a_span" id="the_span"', $element->attributes());
    }
}