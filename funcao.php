<?php  
	function NoEstaArray($novo,$antigos){
		foreach ($antigos as $key => $value) {
			if ($novo == $value) {
				return false;
			} 
		}
		return true;
	}
?>