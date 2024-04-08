<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeGrupo_de_entrega = $_POST['txtNomeGrupo_de_entrega']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoGrupo_de_entrega = $_POST['txtDescriçãoGrupo_de_entrega']; //(=) atribuição

$str_sql_cadastrar_Grupo_de_entrega = "insert into `Grupo_de_entregas` (`nome`,`descricao`) values
('$txtNomeGrupo_de_entrega','$txtDescricaoGrupo_de_entrega');";

try {
    $cadastrar_Grupo_de_entrega = mysql_query($conexao, $str_sql_cadastrar_Grupo_de_entrega);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idGrupo_de_entrega'] = $ultimo_id;
    die('idGrupo_de_entrega:' . $_SESSION['idGrupo_de_entrega']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Grupo_de_entrega. str sql: ' . $str_sql_cadastrar_Grupo_de_entrega);
}
?>