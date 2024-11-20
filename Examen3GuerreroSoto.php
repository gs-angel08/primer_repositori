<?php
/* CBTIS 89 
   Programa que almacena datos en un arreglo y calcula su promeio y su status
   Angel Guerrero
   3ºA Programaciòn Matutino
   */

   $Alumnos=array("Luz","Fer","Ian","Ale");
   $Calificaciones=array(  
   array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6)); 
   $Promedio=array();
   $status=array();
   echo "ALUMNOS";
   echo "<br>";
   for ($i=0; $i < 4; $i++) { 
   	echo $Alumnos[$i];
   	echo "<br>";
   }
   echo "PROMEDIO";
   echo "<br>";
   for ($i=0; $i < 4; $i++) { 
   	for ($a=0; $a < 1; $a++) { 
   		for ($b=0; $b < 2; $b++) { 
   		for ($c=0; $c < 3; $c++) { 
   		}
   		}
	echo $Promedio=$Calificaciones[$i][$a]+$Calificaciones[$i][$b];
   	echo "<br>";
   }
}

   echo "CALIFICACIONES";
   echo "<br>";
   for ($i=0; $i < 4; $i++) { 
   	for ($a=0; $a < 3 ; $a++) { 
	echo $Calificaciones[$i][$a]." ";	
   	}
   	echo "<br>";
   }

?>