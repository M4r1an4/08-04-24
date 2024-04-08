<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeBeneficio = $_POST['txtNomeEquipe']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoEquipe = $_POST['txtDescriçãoEquipe']; //(=) atribuição

$str_sql_cadastrar_Equipe = "insert into `Equipes` (`nome`,`descricao`) values
('$txtNomeEquipe','$txtDescricaoEquipe');";

try {
    $cadastrar_Equipe = mysql_query($conexao, $str_sql_cadastrar_Equipe);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idEquipe'] = $ultimo_id;
    die('idEquipe:' . $_SESSION['idEquipe']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Equipe. str sql: ' . $str_sql_cadastrar_Equipe);
}
?>