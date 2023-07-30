<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Pedra, Papel e Tesoura</title>
</head>
<body>
    <h1>Vamos jogar!</h1>
    <form action = "jogar.php" method = "post">
        <label for="jogada">Escolha su ajogada:</label>
        <select name="jogada" id="jogada">
            <optioon value="pedra">Pedra</optioon>
            <option value="Papel"></option>
            <option value="Tesoura"></option>
        </select>
        <br>    
        <input type="submit" value="jogar">
        </form>
</body>
</html>
<?php
    if (isset($_POST['jogada'])) {
        $jogada_usuario = $_POST['jogada'];
        $jogadas = array('pedra', 'papel', 'tesoura');
        $jogada_computador = $jogadas[array_rand($jogadas)];

        function determinarVencedor($jogada_usuario, $jogada_computador ) {
            if ($jogada_usuario == $jogada_computador){
                return 'Empate';
            } elseif (($jogada_usuario == 'pedra' && $jogada_computador == 'tesoura') ||
                     ($jogada_usuario == 'papel' && $jogada_computador == 'pedra') ||
                     ($jogada_usuario == 'tesoura' && $jogada_computador == 'papel')) {
                        return 'Voce venceu!';
            }  else {
                return 'Computador venceu!';
            }          
    }

            echo '<p> Sua jogada: ' . ucfrist($jogada_usuario) . '</p>';
            echo '<p> Jogada do computador:' . ucfrist($jogada_computador) . '</p>';
            echo '<p>' . determinarVencedor($jogada_usuario, $jogada_computador) . '</p>';
       } else{
        echo '<p>Selecione uma jogada antes de jogar.</p>';
       }

    ?>   