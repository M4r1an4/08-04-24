<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeRisco = $_POST['txtNomeRisco']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoRisco = $_POST['txtDescriçãoRisco']; //(=) atribuição

$str_sql_cadastrar_Risco = "insert into `Riscos` (`nome`,`descricao`) values
('$txtNomeRisco','$txtDescricaoRisco');";

try {
    $cadastrar_Risco = mysql_query($conexao, $str_sql_cadastrar_Risco);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRisco'] = $ultimo_id;
    die('idRisco:' . $_SESSION['idRisco']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Risco. str sql: ' . $str_sql_cadastrar_Risco);
}
?>