<?php  

require '../vendor/autoload.php';  

$element = new \App\HtmlElement('p');  

echo htmlentities($element->render(),ENT_QUOTES, 'UTF-8') ;