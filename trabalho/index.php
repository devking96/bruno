<!DOCTYPE html>

<html>
	<head>
		<title>Bem vindo!</title>

	    <link rel="stylesheet" href="resources/css/estilos.css">
		<link rel="stylesheet" href="resources/css/style.css">
		
		<style>
		
			.principal{
				margin-top: 5%;
				margin-left: 25%;
				margin-rigth: 20%;
				text-align: center;
				border-style:solid;
				border-radius: 10px;
				padding: 1%;
				width: 50%;
			}
		
			.button {
				margin-left: 23%;
				margin-top: 10px;
				margin-bottom: 10px;
				display: inline-block;
				padding: 1rem;
				border-radius: 4px;
				word-spacing: 10px;
				font-weight: 700;
				font-family: sans-serif;
				text-transform: uppercase;
				letter-spacing: 2px;
				color: white;
				background-color: gray;
				transition: .3s;
				cursor: pointer;
			}
			
			.button:hover {
			  box-shadow: 0 0 10px 0px black;
			}

		</style>
	
	</head>

	<body>
		<div class="principal">
			<h1>Escolha o Jogo!</h1>
			<span class="button" onclick="window.location.href ='forca.php'">Jogo da Forca</span><br><br>
			<span class="button" onclick="window.location.href ='jogo.php'">Jogo de perguntas</span>
		</div>
	</body>
</html>