<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeCusto = $_POST['txtNomeCusto']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoCusto = $_POST['txtDescriçãoCusto']; //(=) atribuição

$str_sql_cadastrar_Custo = "insert into `Custos` (`nome`,`descricao`) values
('$txtNomeCusto','$txtDescricaoCusto');";

try {
    $cadastrar_Custo = mysql_query($conexao, $str_sql_cadastrar_Custo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idCusto'] = $ultimo_id;
    die('idCusto:' . $_SESSION['idCusto']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Custo. str sql: ' . $str_sql_cadastrar_Custo);
}
?>