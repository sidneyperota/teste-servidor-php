<?php 

	//var_dump( $_REQUEST ); 
	
	//$url = explode('/', $_REQUEST); 


	//echo $_GET["nome"];

	//echo $_SERVER["REQUEST_URI"];  

	$url = explode('/', $_SERVER["REQUEST_URI"] ); 

	//var_dump( $url ); 

    //var_dump($_GET );

	array_shift( $url );
	
	echo $url[1]."<br>" ; 
	echo $url[2]."<br>";




	var_dump( $url ); 
