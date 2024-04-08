<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeLinha_do_tempo = $_POST['txtNomeLinha_do_tempo']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoLinha_do_tempo = $_POST['txtDescriçãoLinha_do_tempo']; //(=) atribuição

$str_sql_cadastrar_Linha_do_tempo = "insert into `Linha_do_tempos` (`nome`,`descricao`) values
('$txtNomeLinha_do_tempo','$txtDescricaoLinha_do_tempo');";

try {
    $cadastrar_Linha_do_tempo = mysql_query($conexao, $str_sql_cadastrar_Linha_do_tempo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idLinha_do_tempo'] = $ultimo_id;
    die('idLinha_do_tempo:' . $_SESSION['idLinha_do_tempo']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Linha_do_tempo. str sql: ' . $str_sql_cadastrar_Linha_do_tempo);
}
?>