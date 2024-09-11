<?php
use App\HtmlElement;

require '../vendor/autoload.php';


// simple párrafo
$element = new HtmlElement('p',[], 'Contenido');
echo $element->open().'Chicharrones'.$element->close();

echo $element->render();



//elementos de HTML
$element = new HtmlElement('p',['id'=>'párrafo'], 'Contenido');
echo $element->render();

// sin etiqueta para cerrar como img
$element = new HtmlElement('img',['src'=>'../public/img/gato.jpg','height'=>200],);
echo $element->render();

// etiquetas de entrada
$element = new HtmlElement('input',['required'],);
echo $element->render();