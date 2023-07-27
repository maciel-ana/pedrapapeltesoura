
<?php
function 
jogarPedraPapelTesoura ($escolhaUsuario) {
    $opcoes = array ('pedra','papel', 'tesoura');
    $escolhaMaquina = $opcoes [array_rand ($opcoes)];

    if ($escolhaUsuario === $escolhaMaquina){
        echo "Empate! Você escolheu $escolhaUsuario e a máquina escolheu $escolhaMaquina.";
    } elseif (
        ($escolhaUsuario === 'pedra' && $escolhaMaquina === 'tesoura') ||
        ($escolhaUsuario === 'papel' && $escolhaMaquina === 'pedra') || 
        ($escolhaUsuario === 'tesoura' && $escolhaMaquina === 'papel')
    ) {
        echo "Parábens! Você venceu, Você escolheu $escolhaUsuario e a maquina escolheu $escolhaMaquina.";
    } else {
        return "Você perdeu! Você escolheu $escolhaUsuario e a máquina escolheu $escolhaMaquina.";
    }
}