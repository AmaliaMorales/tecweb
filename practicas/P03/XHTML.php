<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>P03</title>

</head>
<h1><center><b> Practica 3 </b></center></h1>

<h2><b> Ejercicio 1 </b></h2>
<h3><ul><br>$_myvar;</br>  <br>$_7var;</br> <br>//myvar</br> <br>$myvar;</br> <br>$var7;</br> <br>$_element1;</br> <br>//$house*5</br> </ul></3>
<h3><ul>Respuesta: No son validas porque no cumplen con la sintaxis.</ul><h3>

<h2><b> Ejercicio 2 </b></h2>
<h3><ul><br>ManejadorSQL,MySQL,ManejadorSQL</br> <br>$a = "ManejadorSQL";</br> <br>$b = "MySQL";</br> <br>$c = &$a;</br> <br>echo "$a,$b,$c";</br></ul></h3> 
<h3><ul><br>ManejadorSQL,MySQL,ManejadorSQL PHP server,PHP server</br> <br>$a = "PHP server";</br> <br>$b = &$a;</br> <br>echo "$a,$b";</br></ul></h3>

<h2><b> Ejercicio 3 </b></h2>
<h3><ul><br>MySQL,5a version de PHP,Array,Array$a = "PHP5";</br><br>$z[] = &$a;</br><br>$b = "5a version de PHP";</br><br>//$c = $b*10;</br><br>//$a .= $b;</br><br>//$b *=$c;</br><br>$z[0] = "MySQL";</br><br>echo "$a,$b,$z,$z";</br></br></ul></h3>

<h2><b> Ejercicio 4 </b></h2>
<h3><ul><br>function test() {</br><br>$a = "PHP5 ";</br><br>$b = "5a version de PHP. ";</br><br>echo "$a en el ámbito global: " . $GLOBALS["a"] . "\n";</br><br> echo "$b en el ámbito simple: " . $b . "\n";}</br><br>$a = "Contenido de ejemplo:  ";</br><br>$b = "Contenido de ejemplo: ";</br><br>test();</br></ul></h3>

<h2><b> Ejercicio 5 </b></h2>
<h3><ul><br>9E3,7,9000 </br> <br>a = "7 personas";</br> <br>$b = (integer) $a;</br> <br>$a = "9E3";</br> <br>$c = (double) $a;</br> <br>echo "$a,$b,$c";</br></ul>  </h3>

<h2><b> Ejercicio 6 </b></h2>
<h2><b> Ejercicio 7 </b></h2>


<body>
<?php
$a = "7 personas";
$b = (integer) $a;
$a = "9E3";
$c = (double) $a;

echo "$a,$b,$c";


?>
</body>
</html>