<?php 

//namespace App\controller;

//use App\classes;

if( isset($_GET['action'])){
	
	require_once "../classes/Aula.php";
	
	$aula = new Aula;
	
 	if( isset($_GET['param']) ){
		//entrará aqui caso vier 1 parametro
		echo $aula->{$_GET['action']}($_GET['param']);
	}
	else{
		// entrará aqui caso nao vier parametros
		echo $aula->{$_GET['action']}();
	}

}