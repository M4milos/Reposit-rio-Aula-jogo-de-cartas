<!DOCTYPE html>

<?php
	include_once 'funcao.php'; 
	
	$nipe = isset($_POST['nipe']) ? $_POST['nipe'] : 1;
	$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	$numerocartas = isset($_POST['numerocartas']) ? $_POST['numerocartas'] : '';
	$acao = isset($_POST['acao']) ? $_POST['acao'] : "";
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Jogo de cartas</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
		<h1>Jogo de cartas</h1>

	<form method="POST">
		<label for="nome">Insira o nome do jogador: </label>
		<input type="text" name="nome" value="<?php echo "$nome"?>"><br><br>
		<label for="nipe">Escolha o nipe que deseja jogar: </label>
	<br><br>
		<label for="nipe">Naipes</label><br><br>
  <input type="radio" name="nipe" id="nipe" value="1" 
        <?php if ($nipe == 1) echo 'checked'; ?>>Ouro<br>
  <input type="radio" name="nipe" id="nipe" value="2" 
        <?php if ($nipe == 2) echo 'checked'; ?>>Espadas<br>
        <input type="radio" name="nipe" id="nipe" value="3" 
        <?php if ($nipe == 3) echo 'checked'; ?>>Copas<br>
  <input type="radio" name="nipe" id="nipe" value="4" 
        <?php if ($nipe == 4) echo 'checked'; ?>>Paus<br>
  
<br>

	<label for="numerocartas">Cartas</label>
  <select name="numerocartas" id="numerocartas">
  <option value="2" <?php if ($numerocartas == 2) echo 'selected'; ?>>2</option>
  <option value="3" <?php if ($numerocartas == 3) echo 'selected'; ?>>3</option>
  <option value="4" <?php if ($numerocartas == 4) echo 'selected'; ?>>4</option>
  <option value="5" <?php if ($numerocartas == 5) echo 'selected'; ?>>5</option>
  <option value="6" <?php if ($numerocartas == 6) echo 'selected'; ?>>6</option>
  </select><br>
	<br><br>
		<button type="submit" name="acao" value="sortear">Sortear</button>
		<button type="submit" name="acao" value="jogar">jogar</button><br><br>	
	</form>
	<?php  


	
	if (isset($_POST['nome'])) {
	if ($nipe != 0) {
		

if ($acao == 'sortear') {
	echo "Cartas sorteadas: <br>";

	$cartas = SortearCarta($numerocartas,$nipe);

//var_dump($cartas);
}
	if ($acao == 'jogar'){	
		echo "$nome:<br>";
		
		$cartas = SortearCarta($numerocartas,$nipe);

	echo "<br>Computador: <br>";

	$arrayComputador =	Computador($numerocartas,$nipec);
	
	$SomaUsuario = SomaArray($cartas);

	$SomaComputador = SomaArray($arrayComputador);

	echo "<br><br>Soma das cartas do usuário: ".$SomaUsuario." - Soma das cartas do computador: ".$SomaComputador;

	VerificaGanhador($SomaUsuario,$SomaComputador);


}
}
}
	?>
</body>
</html>