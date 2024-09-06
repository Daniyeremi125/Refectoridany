<?php  
namespace App;  

class HtmlElement {  
    
    private $name;

public function __construct(string $name)
{
    $this->name =$name;
}
    
public function render()

 {
    
   // abrir la etiqueta
   $result ='<'.$this->name.'>';

    //CERRAR LA ETIQUETA

    return $result;
 }

}