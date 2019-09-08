
<?php
 <?php
      
 function cuentaLetraA($cadena) {
     $result=array(
         "a"=>0,
         "u"=>0;
    );
  
     // recorremos cada elemento de la cadena
     for ($i=0;$i<strlen($cadena);$i++) {
  
         // obtenemos el caracter de la cadena
         $letra=strToLower($cadena[$i]);
  
         // si esta en el array...
         if (in_array($letra, array_keys($result))) {
  
         // aumentamos el contador
             $result[$letra]++;
         }
     }
     return $result;
 }
  
 print_r(contarVocales("Upgrade Hub"));
 ?>





?>