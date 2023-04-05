<?php
$banco = "epiz_33950782_amaricotamakes";
$usuario = "epiz_33950782";
$senha = "erej3422@";
$host = "sql307.epizy.com";
$conn = mysql_connect($host,$usuario,$senha); mysql_select_db($banco) or die("Não foi possível conectar ao banco MySQL");
if (!$conn) {

    echo "Não foi possível conectar ao banco MySQL"; exit;

}

else {

    echo "O banco de dados MySQL está conectando";

}
mysql_close();
?>