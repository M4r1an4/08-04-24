<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeRequisito = $_POST['txtNomeRequisito']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoRequisito = $_POST['txtDescriçãoRequisito']; //(=) atribuição

$str_sql_cadastrar_Requisito = "insert into `Requisitos` (`nome`,`descricao`) values
('$txtNomeRequisito','$txtDescricaoRequisito');";

try {
    $cadastrar_Requisito = mysql_query($conexao, $str_sql_cadastrar_Requisito);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRequisito'] = $ultimo_id;
    die('idRequisito:' . $_SESSION['idRequisito']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Requisito. str sql: ' . $str_sql_cadastrar_Requisito);
}
?>