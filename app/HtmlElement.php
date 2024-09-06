<?php  
namespace App;  


class HtmlElement 
{  
private $name,$content,$attributes;


    public function __construct(string $name,array $attributes=[], $content = null)
    {
        $this->attributes =$attributes;
        $this->name =$name;
        $this->content=$content;
        
    }

    public function render()
    {

        if (! empty($this->attributes)){

            $htmlAttributes='';

            foreach($this->attributes as $attributes => $value){

                if(is_numeric($attributes)){
                    $htmlAttributes .=' '.$value;
                } else{
                    $htmlAttributes .= ' '. $attributes.'="'.htmlentities($value,ENT_QUOTES, 'UTF-8').'"';
                }

            }

            $result ='<'.$this->name.$htmlAttributes.   '>';
        }else {
            $result ='<'.$this->name.'>';
        }
       
       if (in_array($this->name,['br','hr','img','input','meta']) ){
        return $result;
       }




        $result.= htmlentities($this->content,ENT_QUOTES, 'UTF-8');
     

        $result .= '</'.$this->name.'>';
        return $result;
    }
}