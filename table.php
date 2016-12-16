<?php
  
  class htmltable{
    
    public function CreatTable($head,$info){
        $t = '<table border="2">';
        $t .= '<tr>';
        
        foreach($head as $h){
            $t .= '<th>'.$h.'';
        }
        
        $t .= '</tr>';
        
        foreach($info as $value){
            $t .= '<tr>';
            
            foreach($value as $v){
              $t .= '<th>'.$v.'';
             }
             
              $t .= '</tr>';
        }
        
        $t .='</table>';
        
        return $t;
    }
  }
  $obj = new htmltable;
  
  $thead = array('Username','Password','First Name','Last Name');
  
  $infom = array( array('User1','Pass1','Lena','Smith'),
               array('User2','Pass2','Nicol','Green'),
               array('User3','Pass3','David','Wood'),
               array('User4','Pass4','Lucy','White'));
               
  echo $obj -> CreatTable($thead,$infom)
?>