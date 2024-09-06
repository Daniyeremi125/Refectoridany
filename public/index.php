<?php  

    require '../vendor/autoload.php';  

    use App\HtmlElement;  

    $element = new \App\HtmlElement('p',[],'este es el contemido');  

    echo htmlentities( $element->render(), ENT_QUOTES, 'UTF-8');

    echo '<br><br>';

    $element = new \App\HtmlElement('p',['id'=>'my_paragraph'],'este es el contemido');  

    echo htmlentities( $element->render(), ENT_QUOTES, 'UTF-8');

    echo '<br><br>';

    $element = new \App\HtmlElement('p',['id'=>'my_paragraph', 'class' => 'paragraph'],'este es el contemido');  

    echo htmlentities( $element->render(), ENT_QUOTES, 'UTF-8');

    echo '<br><br>';

    $element = new \App\HtmlElement('img',['src'=>'img/styde.png']);  

    echo htmlentities( $element->render(), ENT_QUOTES, 'UTF-8');
    
    echo '<br><br>';

    $element = new \App\HtmlElement('img',['src'=>'img/styde.png','title'=>'Curso de "refactorizacion" en styde']);  

    echo htmlentities( $element->render(), ENT_QUOTES, 'UTF-8');

    echo '<br><br>';

    $element = new \App\HtmlElement('input',['required']);  

    echo htmlentities( $element->render(), ENT_QUOTES, 'UTF-8');