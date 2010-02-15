<?php
session_start("logando");
if(!(session_is_registered("login") and session_is_registered("senha") and session_is_registered("id"))){
header("location:index.php?act=a.20&log_sys=000");
}
$get = $_GET['log_sys'];
if($_SESSION['id'] != $_GET['log_sys']){ 
$valor = "O usuário de ID: $id, tentou mudar o log_sys de: $id para $get, e o sistema o bloqueou.";
mail($email_root, "Acesso não autorizado", $valor, "FROM: sistema@servidor.com.br");
print "<center>Você não pode mudar o log_sys!</center>"; 
print "<center>Estamos deslogando você, e o administrador foi comunidado sobre a tal atitude!</center>";
print "<meta http-equiv='refresh' content=3;URL=index.php?act=a.100>";
exit;
}else{
$modify	= mysql_query("SELECT * FROM cadastro WHERE id = '$get'");
$num	= mysql_num_rows($modify);
while($dados = mysql_fetch_array($modify)){
$id = $dados['id'];
$nasci =  $dados['nasc'];
$email = $dados['email'];
$nome = $dados['nome'];
$grp  = $dados['grp'];
$site = $dados['site'];
$interesse = $dados['interesse'];
$senha =  $dados['senha'];
$login = $dados['login'];
}
?>
<html>
<head>
<title>Painel do usu&aacute;rio - hlegius - Criando Solu&ccedil;&otilde;es</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="589" border="0">
  <form name="form1" method="post" action="index.php?act=c.15">
    <tr> 
      <td width="96"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
      <td width="483"> <font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="nome" type="text" id="nome" size="50" value="<?php print  $nome; ?>" disabled>
        </font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">E-mail:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="email" type="text" id="email" value="<?php print  $email; ?>" size="50">
        </font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Nascimento:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="nasc" type="text" id="nasc" maxlength="10" value="<?php print  $nasci; ?>"disabled>
        </font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Interesses:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="interesse" type="text" id="interesse" size="50" maxlength="255" value="<?php print  $interesse; ?>">
        </font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Site pessoal:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="site" type="text" id="site" size="50" maxlength="100" value="<?php print $site; ?>">
        <br>
        sem http:// (ex: www.site.com.br)</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Login:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="login" type="text" id="login" maxlength="15" value="<?php print  $login; ?>" disabled>
        </font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="senha" type="password" id="senha2" maxlength="9" value="<?php print  $senha; ?>">
        m&aacute;ximo 9 caracteres</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Grupo:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="grp" type="text" id="grp2" value="<?php print  $grp; ?>" disabled>
        </font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="id" type="hidden" id="id" value="<?php print  $id; ?>">
        </font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="submit" name="Submit" value="Atualizar dados!">
        </font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Links r&aacute;pidos:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.31&log_sys=<?php print  $id; ?>">Home</a> 
        | Usu&aacute;rios | <a href="index.php?act=a.100">Sair</a></font></td>
    </tr>
  </form>
</table>
</body>
</html>
<?php
};
?>