<?php

header("Content-Type: text/html;charset=utf-8");

$videos = array();
$flayer = array();

//$total_imagenes = count(glob('vendor/{*}',GLOB_BRACE));
//echo 'total_imagenes = '.$total_imagenes;

$directorio = 'videos';
$ficheros  = scandir($directorio);

for($i=0; $i<count($ficheros); $i++)
{
	if($ficheros[$i]!= "." && $ficheros[$i]!= ".." && $ficheros[$i]!= "flayer")
	{
		$nuevodir = $directorio."/".$ficheros[$i];
		$subfichero  = scandir($nuevodir);
		$aux = array($ficheros[$i],$nuevodir."/".$subfichero[2],$nuevodir."/".$subfichero[3]);
		array_push($videos, $aux);
	}
	
	if($ficheros[$i] == "flayer")
	{
		$nuevodir = $directorio."/".$ficheros[$i];
		$subfichero  = scandir($nuevodir);
		for($j=0; $j<count($subfichero); $j++)
		{
			if($subfichero[$j]!= "." && $subfichero[$j]!= "..")
			{
			array_push($flayer, $nuevodir."/".$subfichero[$j]);
			}
			
		}
		
		
		
	}
}

//print_r($flayer);

?>
