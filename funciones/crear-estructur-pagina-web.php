<?php
// Este ejemplo crea la estructura de una página web con PHP en varias funciones

function inicioHead ()
{
	echo ('<!DOCTYPE html)<br />');
	echo ('<html><br />');
	echo ('<head><br />');
	
}
	
function tituloWeb ( $tituloWeb )
{
	echo ('<title>' . $tituloWeb . '</title><br />');
}

function finalHead ()
{
	echo ('</head>');
}

function inicioBody ()
{
	echo ('<body><br />');
}

function finalBody ()
{
	echo ('</body><br /></html>');
}
?>