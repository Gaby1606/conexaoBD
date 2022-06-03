<?php 
function con(){
    $cont=mysql_connect('HOST', 'LOGIN', 'SENHA')
    (mysql_error());
    print "Conexão OK!";
    mysql_close($cont);
    return $cont;
}
?>

<?php 
$conn =new mysqli_connect("localhost", "root", " ",'test');

(mysql_error()); 
print "Conexão e Seleção OK!"; 
mysql_close($conecta); 
?>

<?php 
$conn =new mysql("localhost", "root", " ");
(mysql_error()); 
mysql_select_db('BANCO', $conecta)
(mysql_error()); 
$sql = "SELECT coluna1, coluna2 FROM tabela"; 
$result = mysql_query($sql, $conecta); 
 
/* Escreve resultados até que não haja mais linhas na tabela */ 
 
while($consulta = mysql_fetch_array($result)) { 
   print "Coluna1: $consulta[coluna1] - Coluna2: $consulta[coluna2]<br>"; 
} 
mysql_free_result($result); 
mysql_close($conecta); 
?>