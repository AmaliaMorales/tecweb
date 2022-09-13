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
<h3><ul><br>string(1) "0" <br>string(4) "TRUE" <br>bool(false)<br> bool(true) <br> bool(false)<br>  bool(true) <br></br>$a = "0"; var_dump($a);<br>echo;<br></br>$b = "TRUE";<br>var_dump($b);<br>echo;<br></br>
$c = FALSE;<br>var_dump($c);<br>echo;<br></br> $d = ($a OR $b);<br>var_dump($d);<br>echo;<br></br> $e = ($a AND $c);<br>var_dump($e);<br>echo;<br></br> $f = ($a XOR $b);<br>var_dump($f);<br></br></ul></h3>

<h2><b> Ejercicio 7 </b></h2>
<h3><ul><br>Apache/2.4.52 (Win64) OpenSSL/1.1.1m PHP/8.1.1 The following may work on your server and return "Apache/x.x.xx" Apache/2.4.52 (Win64) OpenSSL/1.1.1m PHP/8.1.1 </br></ul></h3>
<h3><ul>b)El nombre del sistema operativo (servidor)<br></br>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36</br></ul></h3>
<h3><ul>c)El idioma del navegador (cliente).<br></br> es-419,es;q=0.9 </ul></h3>
<body>
<?php
//Version de apache y PHP
if(function_exists("apache_get_version")){
    $AVerpache = apache_get_version();
  } else {
    $AVerpache = "unknown";
  }
  print $AVerpache;
  ?>
  The following may work on your server and return "Apache/x.x.xx"
  <?php
  print $_SERVER["SERVER_SOFTWARE"];
//Sistema Operativo
  echo $_SERVER['HTTP_USER_AGENT']; 
//Lenguaje
  echo $_SERVER["HTTP_ACCEPT_LANGUAGE"];


?>
</body>
</html>