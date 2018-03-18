<?php

/*
 *  BenchMark_loops.php
 *
 *  BenchMark de Bucles en PHP.
 *
 *  Autor: Secu <secury@stationx11.es>
 *
 *  Simple Programa donde se analiza la
 *  velocidad de ejecución (en base al
 *  coste del tiempo demorado) de distintos
 *  bucles. Se tomará un array simple (no
 *  asociativo) de 10.000 elementos con el
 *  que se iterará por cada bucle midiendo
 *  el tiempo demorado en recorrerlo entero.
 */



/*
 *  Rellenando el array con 10000 elementos.
 */
for($i = 0; $i < 10000; $i++) {
	$elements[] = (string)rand(10000000, 99999999);
}




/***********************************************
 *	Bucle FOR incremental.
 *	Tamaño sin precalcular con antelación.
 *	Se calcula el tamaño por cada iteración.
 */
$time_start = microtime(true);

for ($i=0; $i < sizeof($elements); $i++) { }


$time_end = microtime(true);
$for_inc_notpre = $time_end - $time_start;




/***********************************************
 *	Bucle FOR incremental.
 *	Tamaño precalculado con antelación.
 *	Condición fija y no se ha de calcular
 *	por cada iteracion.
 */
$time_start = microtime(true);

$tamprec = sizeof($elements);
for ($i=0; $i < $tamprec; $i++) { }


$time_end = microtime(true);
$for_inc_tamprec = $time_end - $time_start;




/***********************************************
 *	Bucle FOR decremental.
 *	Tamaño precalculado con antelación.
 *	Empieza desde el final hasta 0 incluido.
 */
$time_start = microtime(true);

$tamprec1 = sizeof($elements);
for ($i=$tamprec1; $i >= 0; $i--) { }


$time_end = microtime(true);
$for_dec = $time_end - $time_start;




/***********************************************
 *	Bucle FOREACH.
 *	Toma cada elemento del array, sin
 *  coger su valor, sólo la clave.
 *  No se requiere utilizar arrays
 *  asociativos en este test.
 */
$time_start = microtime(true);

foreach($elements as $element) { }


$time_end = microtime(true);
$foreach = $time_end - $time_start;




/***********************************************
 *	Bucle WHILE incremental.
 *	Tamaño precalculado con antelación.
 *  
 */
$time_start = microtime(true);

$tamprec2 = sizeof($elements);
$i = 0;
while($i < $tamprec2) { $i++; }


$time_end = microtime(true);
$while_inc = $time_end - $time_start;




/***********************************************
 *	Bucle WHILE decremental.
 *	Tamaño precalculado con antelación.
 *  
 */
$time_start = microtime(true);

$tamprec3 = sizeof($elements);
while($tamprec3--) { }


$time_end = microtime(true);
$while_dec = $time_end - $time_start;




/***********************************************
 *	RESULTADOS DEL BENCHMARK DE BUCLES.
 */
echo '=========================================';
echo PHP_EOL;
echo 'Resultados del Benchmark:';
echo PHP_EOL;

echo '- For Incremental Tamaño SIN precalcular:  ';
echo $for_inc_notpre;
echo ' ms';
echo PHP_EOL;

echo '- For Incremental Tamaño PRECALCULADO:     ';
echo $for_inc_tamprec;
echo ' ms';
echo PHP_EOL;

echo '- For Decremental Tamaño PRECALCULADO:     ';
echo $for_dec;
echo ' ms';
echo PHP_EOL;

echo '- Foreach Array NO Asociativo (!valor):    ';
echo $foreach;
echo ' ms';
echo PHP_EOL;

echo '- While Incremental Tamaño PRECALCULADO:   ';
echo $while_inc;
echo ' ms';
echo PHP_EOL;

echo '- While Decremental Tamaño PRECALCULADO:   ';
echo $while_dec;
echo ' ms';
echo PHP_EOL;

echo '=========================================';
echo PHP_EOL;


?>