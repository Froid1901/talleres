<?php 
function posicionL($compa,$cadena){
$p2=array();
$acomL="";
		for ($j=0; $j <strlen($cadena) ; $j++) { 
			$p2[$j]=substr($cadena, $j,1);
				for ($k=0; $k <strlen($compa) ; $k++) { 
					if ($p2[$j]==substr($compa, $k,1)) {
						
						$acomL.=($j+1).",";

					}

				}
		}
		return $acomL;		
										
	}


		function acomL($compa,$cadena){

$acomL="";
		for ($j=0; $j <strlen($cadena) ; $j++) { 
			$p2=substr($cadena, $j,1);
				for ($k=0; $k <strlen($compa) ; $k++) { 
					if ($p2==substr($compa, $k,1)) {
						
						$acomL.=$p2;

					}

				}
										
	}
	return $acomL;
}

	function contadorN($cadena){

$contadorM=0;
		for ($j=0; $j <strlen($cadena) ; $j++) { 
			$p2=substr($cadena, $j,1);
				if (is_numeric($p2)&& $p2>=0) {
						$contadorM++;
					}
					}
					
						return $contadorM;
								
	}

	
	function comparacionMi($compa,$cadena){

$contadorM=0;
		for ($j=0; $j <strlen($cadena) ; $j++) { 
			$p2=substr($cadena, $j,1);
				for ($k=0; $k <strlen($compa) ; $k++) { 
					if ($p2==substr($compa, $k,1)) {
						$contadorM++;
					}
				}
					}
					
						return $contadorM;
							
	}


	function comparacionM($compa,$cadena){

$contadorM=0;
		for ($j=0; $j <strlen($cadena) ; $j++) { 
			$p2=substr($cadena, $j,1);
				for ($k=0; $k <strlen($compa) ; $k++) { 
					if ($p2==substr($compa, $k,1)) {
						$contadorM++;

					}
				}
					}
					
						return $contadorM;					
	}

	
	function letras($cadena){
					$cont=0;
				$palabra=array();
				for ($i=0; $i <strlen($cadena) ; $i++) { 
					$palabra[$i]=substr($cadena,$i,1);
					if (is_numeric($palabra[$i])) {
						$cont=1;
						break;
					}else
					$cont=2;
				}
				return $cont;
		} 

	function contarArroa($email){
		$c=0;
		for ($i=0; $i <strlen($email); $i++) { 
			$p=substr($email,$i,1);
			if ($p=="@") {
				$c++;
			}
		}
		return $c;

	}	 


 ?>