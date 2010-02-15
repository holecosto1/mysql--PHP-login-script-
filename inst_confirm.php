<?php
include "config.php";
$pattern = "^([0-9]{2})/([0-9]{2})/([0-9]{4})";
$verifica = ereg($pattern, $nasc);
if($verifica == false){
print "Sintaxe inválida para o campo nascimento";
exit;
}
if($senha != $r_senha)
	{
		print "<center>Os campos de senha não coincidem!</center>";
		exit;
	}else{
$table_cadastro = mysql_query("CREATE TABLE if not exists cadastro(
		id int(3) NOT NULL auto_increment primary Key,
		nome varchar(89) NOT NULL,
		email varchar(102) NOT NULL,
		nasc varchar(10) NOT NULL,
		cidade varchar(52) NOT NULL,
		interesse varchar(255) NOT NULL,
		site varchar(255) NOT NULL,
		login varchar(15) NOT NULL,
		senha varchar(9) NOT NULL,
		grp varchar(50) NOT NULL)") or die ("Erro fatal" . mysql_error());
		$table_admin = mysql_query("CREATE TABLE if not exists adlogs(
			id int(3) NOT NULL auto_increment Primary Key,
			data varchar(19) NOT NULL,
			ip   varchar(16) NOT NULL,
			login varchar(15) NOT NULL)") or die ("Erro ao criar a tabela do admin " . mysql_error());
$insere = mysql_query("INSERT INTO cadastro(nome,email,nasc,login,senha,cidade,interesse,site,grp) VALUES ('$nome','$email','$nasc','$login','$senha','Guarulhos', '', '', 'administradores')") or die(mysql_error());
$mysql_list = mysql_query("SELECT * FROM cadastro WHERE login = '$login'");
$lista = mysql_num_rows($mysql_list);
while($conta = mysql_fetch_array($mysql_list)){
$ide = $conta['id'];
}

			print "<center>Sistema instalado com sucesso!</center>";
			print "<center><a href='index.php?act=a.20&log_sys=0'>Página Principal</a></center>";
			print "<title>Sistema instalado com sucesso!</title>";
		};
?>