<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeStakeholder = $_POST['txtNomeStakeholder']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoStakeholder = $_POST['txtDescriçãoStakeholder']; //(=) atribuição

$str_sql_cadastrar_Stakeholder = "insert into `Stakeholders` (`nome`,`descricao`) values
('$txtNomeStakeholder','$txtDescricaoStakeholder');";

try {
    $cadastrar_Stakeholder = mysql_query($conexao, $str_sql_cadastrar_Stakeholder);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idStakeholder'] = $ultimo_id;
    die('idStakeholder:' . $_SESSION['idStakeholder']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Stakeholder. str sql: ' . $str_sql_cadastrar_Stakeholder);
}
?>