<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
    <title>Jogo de Perguntas sobre IST</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
	    margin-top: 5%;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 5px;
    }

    h1 {
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    h2 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    label {
        font-size: 16px;
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="submit"] {
        font-size: 16px;
        padding: 5px 10px;
        margin-bottom: 10px;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    .btn {
        display: inline-block;
        padding: 8px 16px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50;
        color: #ffffff;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #45a049;
    }
</style>
</style>

	<style>
		.botao{			
			margin-left: 2%;
			margin-rigth: 2%;			
			display: inline-block;
			padding: 1rem;
			border-radius: 10px;
			word-spacing: 5px;
			font-weight: 100;
			font-family: sans-serif;
			text-transform: uppercase;
			letter-spacing: 2px;
			color: black;
			background-color: white;
			transition: .3s;
			cursor: pointer;			
		}
		.cabecario{
			text-align:center;
		}

	</style>
</head>

<body>
    <div class="container">
	<div class="cabecario">
		<button class="botao" onclick="window.location.href ='index.php'">Início</button>
		<button class="botao" onclick="window.location.href ='forca.php'">Jogo da Forca</button>
		<button class="botao" onclick="window.location.href ='jogo.php'">Jogo de perguntas</button>
	</div>
        <h1>Jogo de Perguntas sobre IST</h1>
        <?php
        // Definição do array de perguntas
        $perguntas = array(
            array(
                'texto' => 'Qual é a IST mais comum no mundo?',
                'opcoes' => array(
                    'a' => 'HIV/AIDS',
                    'b' => 'Gonorreia',
                    'c' => 'Clamídia'
                ),
                'respostaCorreta' => 'a'
            ),
            array(
                'texto' => 'Qual é a forma mais eficaz de prevenir as ISTs?',
                'opcoes' => array(
                    'a' => 'Uso de preservativo',
                    'b' => 'Vacinação',
                    'c' => 'Uso de anticoncepcionais'
                ),
                'respostaCorreta' => 'a'
            ),
            array(
                'texto' => 'Qual IST pode causar verrugas genitais?',
                'opcoes' => array(
                    'a' => 'Herpes genital',
                    'b' => 'Sífilis',
                    'c' => 'HPV'
                ),
                'respostaCorreta' => 'c'
            ),
            array(
                'texto' => 'Qual é a IST conhecida como "cancro mole"?',
                'opcoes' => array(
                    'a' => 'Gonorreia',
                    'b' => 'Sífilis',
                    'c' => 'Herpes genital'
                ),
                'respostaCorreta' => 'a'
            ),
            array(
                'texto' => 'Qual IST pode levar à infertilidade se não for tratada?',
                'opcoes' => array(
                    'a' => 'Clamídia',
                    'b' => 'Gonorreia',
                    'c' => 'Herpes genital'
                ),
                'respostaCorreta' => 'a'
            ),
            array(
                'texto' => 'Qual IST é causada por um protozoário?',
                'opcoes' => array(
                    'a' => 'Tricomoníase',
                    'b' => 'Sífilis',
                    'c' => 'HPV'
                ),
                'respostaCorreta' => 'a'
            ),
            array(
                'texto' => 'Qual IST pode ser transmitida pelo contato com sangue infectado?',
                'opcoes' => array(
                    'a' => 'Hepatite B',
                    'b' => 'Sífilis',
                    'c' => 'Herpes genital'
                ),
                'respostaCorreta' => 'a'
            ),
            array(
                'texto' => 'Qual IST pode causar lesões na pele e mucosas?',
                'opcoes' => array(
                    'a' => 'Herpes genital',
                    'b' => 'Gonorreia',
                    'c' => 'Clamídia'
                ),
                'respostaCorreta' => 'a'
            ),
            array(
                'texto' => 'Qual IST pode causar cegueira em recém-nascidos?',
                'opcoes' => array(
                    'a' => 'Sífilis',
                    'b' => 'HPV',
                    'c' => 'Gonorreia'
                ),
                'respostaCorreta' => 'a'
            ),
            array(
                'texto' => 'Qual IST é causada por um vírus?',
                'opcoes' => array(
                    'a' => 'HIV/AIDS',
                    'b' => 'Sífilis',
                    'c' => 'Gonorreia'
                ),
                'respostaCorreta' => 'a'
            )
        );

        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $jogadorAtual = $_POST['jogadorAtual'];
            $perguntaAtual = $_POST['perguntaAtual'];
            $pontuacaoJogador1 = $_POST['pontuacaoJogador1'];
            $pontuacaoJogador2 = $_POST['pontuacaoJogador2'];

            // Processa a resposta do jogador atual
            if (isset($_POST['resposta'])) {
                $resposta = $_POST['resposta'];

                // Verifica se a resposta está correta
                if ($resposta == $perguntas[$perguntaAtual - 1]['respostaCorreta']) {
                    if ($jogadorAtual == 1) {
                        $pontuacaoJogador1++;
                    } else {
                        $pontuacaoJogador2++;
                    }
                    echo '<p>Resposta correta!</p>';
                } else {
                    echo '<p>Resposta incorreta!</p>';
                }
            }

            // Verifica se o jogo acabou
            if ($perguntaAtual > count($perguntas) - 1) {
                echo '<h2>Fim do jogo!</h2>';
                echo '<p>Pontuação final:</p>';
                echo '<p>' . $_POST['jogador1'] . ': ' . $pontuacaoJogador1 . ' ponto(s)</p>';
                echo '<p>' . $_POST['jogador2'] . ': ' . $pontuacaoJogador2 . ' ponto(s)</p>';
                echo '<p>Vencedor: ' . ($pontuacaoJogador1 > $pontuacaoJogador2 ? $_POST['jogador1'] : $_POST['jogador2']) . '</p>';
                echo '<p><a href="jogo.php">Jogar Novamente</a></p>';
            } else {
                echo '<form method="POST" action="jogo.php">';
                echo '<input type="hidden" name="jogadorAtual" value="' . ($jogadorAtual == 1 ? 2 : 1) . '">';
                echo '<input type="hidden" name="jogador1" value="' . $_POST['jogador1'] . '">';
                echo '<input type="hidden" name="jogador2" value="' . $_POST['jogador2'] . '">';
                echo '<input type="hidden" name="pontuacaoJogador1" value="' . $pontuacaoJogador1 . '">';
                echo '<input type="hidden" name="pontuacaoJogador2" value="' . $pontuacaoJogador2 . '">';
                echo '<input type="hidden" name="perguntaAtual" value="' . ($perguntaAtual + 1) . '">';

                $jogadorAtualNome = ($jogadorAtual == 1) ? $_POST['jogador1'] : $_POST['jogador2'];
                $imagemPergunta = '';
                switch ($perguntaAtual) {
                    case 1:
                        $imagemPergunta = 'herpes.png';
                        break;
                    case 2:
                        $imagemPergunta = 'gonorreia.png';
                        break;
                    case 3:
                        $imagemPergunta = 'clamidia.png';
                        break;
                    case 4:
                        $imagemPergunta = 'sifilis.png';
                        break;
                    case 5:
                        $imagemPergunta = 'hpv.png';
                        break;
                    case 6:
                        $imagemPergunta = 'hiv.png';
                        break;
                    case 7:
                        $imagemPergunta = 'hiv.png';
                        break;
                    case 8:
                        $imagemPergunta = 'hiv.png';
                        break; 
                    case 9:
                        $imagemPergunta = 'hiv.png';
                        break;
                    case 10:
                        $imagemPergunta = 'hiv.png';
                        break;   
                    // Adicione os casos para as perguntas restantes, seguindo o mesmo padrão
                }
                
                echo '<h2>Pergunta ' . $perguntaAtual . ' - Jogador: ' . $jogadorAtualNome . '</h2>';
                echo '<img src="' . $imagemPergunta . '" alt="Imagem da doença">';
                

                echo '<p>' . $perguntas[$perguntaAtual - 1]['texto'] . '</p>';

                foreach ($perguntas[$perguntaAtual - 1]['opcoes'] as $opcao => $textoOpcao) {
                    echo '<input type="radio" name="resposta" value="' . $opcao . '"> ' . $textoOpcao . '<br>';
                }

                echo '<input type="submit" value="Responder">';
                echo '</form>';
            }
        } else {
            // Formulário de inserção dos nomes dos jogadores
            echo '<form method="POST" action="jogo.php">';
            echo '<label for="jogador1">Nome do Jogador 1:</label>';
            echo '<input type="text" id="jogador1" name="jogador1" required><br>';
            echo '<label for="jogador2">Nome do Jogador 2:</label>';
            echo '<input type="text" id="jogador2" name="jogador2" required><br>';
            echo '<input type="hidden" name="jogadorAtual" value="1">';
            echo '<input type="hidden" name="pontuacaoJogador1" value="0">';
            echo '<input type="hidden" name="pontuacaoJogador2" value="0">';
            echo '<input type="hidden" name="perguntaAtual" value="1">';
            echo '<input type="submit" value="Iniciar Jogo">';
            echo '</form>';
            
        }
        ?>
    </div>
</body>
</html>
