<?php


	function retornar_dados() { 
		

		$json = '{"codigo":1,"nome":"sidney","c":3,"d":4,"e":5}';

		
		$json_teste = json_encode($json);

	
		return var_dump(json_decode($json_teste));
		
		

	}


	retornar_dados();




