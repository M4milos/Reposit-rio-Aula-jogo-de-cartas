<?php  
	function NoEstaArray($novo,$antigos){
		foreach ($antigos as $key => $value) {
			if ($novo == $value) {
				return false;
			} 
		}
		return true;
	}

	function SortearCarta($numerocartas,$nipe){
		$cartas = array();
		for ($i=0; $i < $numerocartas; $i++) { 
			do {
				$cartassortidas = rand(1,13);
			} while (!NoEstaArray($cartassortidas,$cartas));
			$cartas[] = $cartassortidas;
			sort($cartas);
			//var_dump($nipe);
			
		}
			foreach ($cartas as $cartassortidas) {

	//ouros

	if ($nipe == 1) {
	
	if ($cartassortidas == 1) 
	echo "<img src='imgs/ouro/Aouros.png' width='60'>";
	
	elseif ($cartassortidas == 2) 
	echo "<img src='imgs/ouro/2ouros.png' width='60'>";
	
	elseif ($cartassortidas == 3) 
	echo "<img src='imgs/ouro/3ouros.png' width='60'>";
	
	elseif ($cartassortidas == 4) 
	echo "<img src='imgs/ouro/4ouros.png' width='60'>";
	
	elseif ($cartassortidas == 5) 
	echo "<img src='imgs/ouro/5ouros.png' width='60'>";
	
	elseif ($cartassortidas == 6) 
	echo "<img src='imgs/ouro/6ouros.png' width='60'>";
	
	elseif ($cartassortidas == 7) 
	echo "<img src='imgs/ouro/7ouros.png' width='60'>";
	
	elseif ($cartassortidas == 8) 
	echo "<img src='imgs/ouro/8ouros.png' width='60'>";
	
	elseif ($cartassortidas == 9) 
	echo "<img src='imgs/ouro/9ouros.png' width='60'>";
	
	elseif ($cartassortidas == 10) 
	echo "<img src='imgs/ouro/10ouros.png' width='60'>";
	
	elseif ($cartassortidas == 11) 
	echo "<img src='imgs/ouro/Jouros.png' width='60'>";
	
	elseif ($cartassortidas == 12) 
	echo "<img src='imgs/ouro/Qouros.png' width='60'>";
	
	elseif ($cartassortidas == 13) 
	echo "<img src='imgs/ouro/Kouros.png' width='60'>";
	
	}

	//espadas

	if ($nipe == 2) {
	
	if ($cartassortidas == 1) 
	echo "<img src='imgs/espadas/Aespada.jpg' width='60'>";
	
	elseif ($cartassortidas == 2) 
	echo "<img src='imgs/espadas/2espada.jpg' width='60'>";
	
	elseif ($cartassortidas == 3) 
	echo "<img src='imgs/espadas/3espada.png' width='60'>";
	
	elseif ($cartassortidas == 4) 
	echo "<img src='imgs/espadas/4espada.png' width='60'>";
	
	elseif ($cartassortidas == 5) 
	echo "<img src='imgs/espadas/5espada.png' width='60'>";
	
	elseif ($cartassortidas == 6) 
	echo "<img src='imgs/espadas/6espada.png' width='60'>";
	
	elseif ($cartassortidas == 7) 
	echo "<img src='imgs/espadas/7espada.png' width='60'>";
	
	elseif ($cartassortidas == 8) 
	echo "<img src='imgs/espadas/8espada.png' width='60'>";
	
	elseif ($cartassortidas == 9) 
	echo "<img src='imgs/espadas/9espada.png' width='60'>";
	
	elseif ($cartassortidas == 10) 
	echo "<img src='imgs/espadas/10espada.png' width='60'>";
	
	elseif ($cartassortidas == 11) 
	echo "<img src='imgs/espadas/jespada.png' width='60'>";
	
	elseif ($cartassortidas == 12) 
	echo "<img src='imgs/espadas/qespada.png' width='60'>";
	
	elseif ($cartassortidas == 13) 
	echo "<img src='imgs/espadas/kespada.jpg' width='60'>";
	
	}

	//copas

	if ($nipe == 3) {
	
	if ($cartassortidas == 1) 
	echo "<img src='imgs/copas/Acopas.png' width='60'>";
	
	elseif ($cartassortidas == 2) 
	echo "<img src='imgs/copas/2copas.png' width='60'>";
	
	elseif ($cartassortidas == 3) 
	echo "<img src='imgs/copas/3copas.png' width='60'>";
	
	elseif ($cartassortidas == 4) 
	echo "<img src='imgs/copas/4copas.png' width='60'>";
	
	elseif ($cartassortidas == 5) 
	echo "<img src='imgs/copas/5copas.jpg' width='60'>";
	
	elseif ($cartassortidas == 6) 
	echo "<img src='imgs/copas/6copas.jpg' width='60'>";
	
	elseif ($cartassortidas == 7) 
	echo "<img src='imgs/copas/7copas.jpg' width='60'>";
	
	elseif ($cartassortidas == 8) 
	echo "<img src='imgs/copas/8copas.jpg' width='60'>";
	
	elseif ($cartassortidas == 9) 
	echo "<img src='imgs/copas/9copas.png' width='60'>";
	
	elseif ($cartassortidas == 10) 
	echo "<img src='imgs/copas/10copas.jpg' width='60'>";
	
	elseif ($cartassortidas == 11) 
	echo "<img src='imgs/copas/Jcopas.jpg' width='60'>";
	
	elseif ($cartassortidas == 12) 
	echo "<img src='imgs/copas/Qcopas.jpg' width='60'>";
	
	elseif ($cartassortidas == 13) 
	echo "<img src='imgs/copas/Kcopas.png' width='60'>";
	
	}

	//paus

	if ($nipe == 4) {
	
	if ($cartassortidas == 1) 
	echo "<img src='imgs/paus/Apaus.jpg' width='60'>";
	
	elseif ($cartassortidas == 2) 
	echo "<img src='imgs/paus/2paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 3) 
	echo "<img src='imgs/paus/3paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 4) 
	echo "<img src='imgs/paus/4paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 5) 
	echo "<img src='imgs/paus/5paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 6) 
	echo "<img src='imgs/paus/6paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 7) 
	echo "<img src='imgs/paus/7paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 8) 
	echo "<img src='imgs/paus/8paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 9) 
	echo "<img src='imgs/paus/9paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 10) 
	echo "<img src='imgs/paus/10paus.jpg' width='60'>";
	
	elseif ($cartassortidas == 11) 
	echo "<img src='imgs/paus/Jpaus.jpg' width='60'>";
	
	elseif ($cartassortidas == 12) 
	echo "<img src='imgs/paus/Qpaus.jpg' width='60'>";
	
	elseif ($cartassortidas == 13) 
	echo "<img src='imgs/paus/Kpaus.jpg' width='60'>";
	
	}
	}
	//var_dump($cartas);
	return $cartas;
	}	

	$nipec = rand(1,4);
	
	function Computador($numerocartas,$nipec){
		
		$arrayComputador = array();	
		for ($i=0; $i < $numerocartas; $i++) {
		do {
				$cartacomp = rand(1,13);
			} while (!NoEstaArray($cartacomp,$arrayComputador));

			$arrayComputador[] = $cartacomp;
			sort($arrayComputador);
		}

		foreach ($arrayComputador as $cartacomp) {
	
	//ouros

	if ($nipec == 1) {
	
	if ($cartacomp == 1) 
	echo "<img src='imgs/ouro/Aouros.png' width='60'>";
	
	elseif ($cartacomp == 2) 
	echo "<img src='imgs/ouro/2ouros.png' width='60'>";
	
	elseif ($cartacomp == 3) 
	echo "<img src='imgs/ouro/3ouros.png' width='60'>";
	
	elseif ($cartacomp == 4) 
	echo "<img src='imgs/ouro/4ouros.png' width='60'>";
	
	elseif ($cartacomp == 5) 
	echo "<img src='imgs/ouro/5ouros.png' width='60'>";
	
	elseif ($cartacomp == 6) 
	echo "<img src='imgs/ouro/6ouros.png' width='60'>";
	
	elseif ($cartacomp == 7) 
	echo "<img src='imgs/ouro/7ouros.png' width='60'>";
	
	elseif ($cartacomp == 8) 
	echo "<img src='imgs/ouro/8ouros.png' width='60'>";
	
	elseif ($cartacomp == 9) 
	echo "<img src='imgs/ouro/9ouros.png' width='60'>";
	
	elseif ($cartacomp == 10) 
	echo "<img src='imgs/ouro/10ouros.png' width='60'>";
	
	elseif ($cartacomp == 11) 
	echo "<img src='imgs/ouro/Jouros.png' width='60'>";
	
	elseif ($cartacomp == 12) 
	echo "<img src='imgs/ouro/Qouros.png' width='60'>";
	
	elseif ($cartacomp == 13) 
	echo "<img src='imgs/ouro/Kouros.png' width='60'>";
	
	}

	//espadas

	if ($nipec == 2) {
	
	if ($cartacomp == 1) 
	echo "<img src='imgs/espadas/Aespada.jpg' width='60'>";
	
	elseif ($cartacomp == 2) 
	echo "<img src='imgs/espadas/2espada.jpg' width='60'>";
	
	elseif ($cartacomp == 3) 
	echo "<img src='imgs/espadas/3espada.png' width='60'>";
	
	elseif ($cartacomp == 4) 
	echo "<img src='imgs/espadas/4espada.png' width='60'>";
	
	elseif ($cartacomp == 5) 
	echo "<img src='imgs/espadas/5espada.png' width='60'>";
	
	elseif ($cartacomp == 6) 
	echo "<img src='imgs/espadas/6espada.png' width='60'>";
	
	elseif ($cartacomp == 7) 
	echo "<img src='imgs/espadas/7espada.png' width='60'>";
	
	elseif ($cartacomp == 8) 
	echo "<img src='imgs/espadas/8espada.png' width='60'>";
	
	elseif ($cartacomp == 9) 
	echo "<img src='imgs/espadas/9espada.png' width='60'>";
	
	elseif ($cartacomp == 10) 
	echo "<img src='imgs/espadas/10espada.png' width='60'>";
	
	elseif ($cartacomp == 11) 
	echo "<img src='imgs/espadas/jespada.png' width='60'>";
	
	elseif ($cartacomp == 12) 
	echo "<img src='imgs/espadas/qespada.png' width='60'>";
	
	elseif ($cartacomp == 13) 
	echo "<img src='imgs/espadas/kespada.jpg' width='60'>";
	
	}

	//copas

	if ($nipec == 3) {
	
	if ($cartacomp == 1) 
	echo "<img src='imgs/copas/Acopas.png' width='60'>";
	
	elseif ($cartacomp == 2) 
	echo "<img src='imgs/copas/2copas.png' width='60'>";
	
	elseif ($cartacomp == 3) 
	echo "<img src='imgs/copas/3copas.png' width='60'>";
	
	elseif ($cartacomp == 4) 
	echo "<img src='imgs/copas/4copas.png' width='60'>";
	
	elseif ($cartacomp == 5) 
	echo "<img src='imgs/copas/5copas.jpg' width='60'>";
	
	elseif ($cartacomp == 6) 
	echo "<img src='imgs/copas/6copas.jpg' width='60'>";
	
	elseif ($cartacomp == 7) 
	echo "<img src='imgs/copas/7copas.jpg' width='60'>";
	
	elseif ($cartacomp == 8) 
	echo "<img src='imgs/copas/8copas.jpg' width='60'>";
	
	elseif ($cartacomp == 9) 
	echo "<img src='imgs/copas/9copas.png' width='60'>";
	
	elseif ($cartacomp == 10) 
	echo "<img src='imgs/copas/10copas.jpg' width='60'>";
	
	elseif ($cartacomp == 11) 
	echo "<img src='imgs/copas/Jcopas.jpg' width='60'>";
	
	elseif ($cartacomp == 12) 
	echo "<img src='imgs/copas/Qcopas.jpg' width='60'>";
	
	elseif ($cartacomp == 13) 
	echo "<img src='imgs/copas/Kcopas.png' width='60'>";
	
	}

	//paus

	if ($nipec == 4) {
	
	if ($cartacomp == 1) 
	echo "<img src='imgs/paus/Apaus.jpg' width='60'>";
	
	elseif ($cartacomp == 2) 
	echo "<img src='imgs/paus/2paus.jpg' width='60'>";
	
	elseif ($cartacomp == 3) 
	echo "<img src='imgs/paus/3paus.jpg' width='60'>";
	
	elseif ($cartacomp == 4) 
	echo "<img src='imgs/paus/4paus.jpg' width='60'>";
	
	elseif ($cartacomp == 5) 
	echo "<img src='imgs/paus/5paus.jpg' width='60'>";
	
	elseif ($cartacomp == 6) 
	echo "<img src='imgs/paus/6paus.jpg' width='60'>";
	
	elseif ($cartacomp == 7) 
	echo "<img src='imgs/paus/7paus.jpg' width='60'>";
	
	elseif ($cartacomp == 8) 
	echo "<img src='imgs/paus/8paus.jpg' width='60'>";
	
	elseif ($cartacomp == 9) 
	echo "<img src='imgs/paus/9paus.jpg' width='60'>";
	
	elseif ($cartacomp == 10) 
	echo "<img src='imgs/paus/10paus.jpg' width='60'>";
	
	if ($cartacomp == 11) 
	echo "<img src='imgs/paus/Jpaus.jpg' width='60'>";
	
	if ($cartacomp == 12) 
	echo "<img src='imgs/paus/Qpaus.jpg' width='60'>";
	
	if ($cartacomp == 13) 
	echo "<img src='imgs/paus/Kpaus.jpg' width='60'>";
	
	}
	}

		sort($arrayComputador);
		//echo "arrayComputador";
		//var_dump($arrayComputador);
		return $arrayComputador;

}	

	function SomaArray($cartas)
	{
		$somausu = array_sum($cartas);
		//var_dump($cartas);
		return $somausu;

	}

	function VerificaGanhador($SomaUsuario,$SomaComputador){
		if ($SomaUsuario > $SomaComputador) {
			echo "<br><br><h3 class = 'azul'>Usuário ganhou.</h3>";
		}	elseif ($SomaComputador > $SomaUsuario) {
			echo "<br><br><h3 class='vermelho'>Computador ganhou.</h3>";
		} else {
			echo "<br><br><h3 class='verde'>Empate</h3>";
		}
	}
?>