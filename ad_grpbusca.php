<?php
include "config.php";
session_start("logando");
if(!(session_is_registered("login") and  session_is_registered("senha") and session_is_registered("id") and session_is_registered("grp"))){
header("location:index.php?act=a.20");
exit;
}
$get = $_GET['log_sys'];
$bs_login = $_POST['bs_login'];
if($_SESSION['id'] != $_GET['log_sys']){ 
$valor = "O usuário de ID: $id, tentou mudar o log_sys de: $id para $get, e o sistema o bloqueou.";
mail($email_root, "Acesso não autorizado", $valor, "FROM: sistema@servidor.com.br");
print "<center>Você não pode mudar o log_sys!</center>"; 
print "<center>Estamos deslogando você, e o administrador foi comunidado sobre a tal atitude!</center>";
print "<meta http-equiv='refresh' content=3;URL=index.php?act=a.100>";
exit;
}
$bs = mysql_query("SELECT * FROM cadastro WHERE login = '$bs_login'");
while($busca = mysql_fetch_array($bs)){
$id_bs   = $busca['id'];
$login_bs = $busca['login'];
$nome = $busca['nome'];
$email = $busca['email'];
$senha_bs = $busca['senha'];
$interesse = $busca['interesse'];
$site = $busca['site'];
$niver = $busca['nasc'];
$grps   = $busca['grp'];
}
?>


<html>
<head>
<title>Painel de Controle - hlegius( Criando Soluções )</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body>
<div id="Layer1" style="position:absolute; left:5px; top:19px; width:154px; height:217px; z-index:1"> 
  <table width="154" height="159" border="0">
    <tr> 
      <td><div align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Menu</font></div></td>
    </tr>
    <tr> 
      <td height="14"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=pc.1a&log_sys=<?php print  $get; ?>" title="Página principal do Painel de administração">Home</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=gr.p2&log_sys=<?php print  $get; ?>" title="Mostra que se logou ao painel">Logs 
        ao painel</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=ad.ls&log_sys=<?php print  $get;?>" title="Mostra os seus administradores...">Listar 
        administradores</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">--&gt;Membros</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=me.bs&log_sys=<?php print  $get; ?>" title="Exibe algumas informações sobre seus cadastros">Total 
        de cadastros</a></font></td>
    </tr>
    <tr> 
      <td height="20"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=ma.ko&log_sys=<?php print  $get; ?>" title="Envia e-mail para todos os seus usuários">Mala 
        Direta</a></font></td>
    </tr>
    <tr> 
      <td height="15"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=grp.ad&log_sys=<?php print  $get; ?>" title="Edite dados dos usuários cadastrados no banco de dados">Editar 
        dados</a></font></td>
    </tr>
    <tr> 
      <td height="16"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=pc.inf&log_sys=<?php print  $get; ?>" title="Informações Sobre o Sistema">Infos 
        do Sistema</a></font></td>
    </tr>
  </table>
  <table width="145" border="0">
    <tr> 
      <td height="15"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;--&gt;Deslogar</font></td>
    </tr>
    <tr> 
      <td height="14"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=cb.6w&log_sys=<?php print  $get; ?>" title="Deslogar somente do Painel de Administração">Somente 
        do Pcontrole</a></font></td>
    </tr>
    <tr> 
      <td height="15"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=pc.3b&log_sys=<?php print  $get; ?>" title="Deslogar do Painel de Administração e da area pessoal">Do 
        sistema inteiro</a></font></td>
    </tr>
  </table>
</div>
<div id="Layer3" style="position:absolute; left:140px; top:6px; width:15px; height:370px; z-index:3"> 
  <table width="11" height="373" border="0">
    <tr> 
      <td background="imagens/skin_ad1.gif">&nbsp;</td>
    </tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:156px; top:5px; width:613px; height:220px; z-index:4"> 
  <p><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><br>
    Resultado da sua busca pelo usu&aacute;rio<strong>: <?php print $bs_login; ?></strong><br>
    <br>
<?php if ($id_bs == 1){ print "Atenção, o usuário procurado é o <b>root do sistema</b>. Para sua maior segurança os dados dele só podem ser alterados por ele, indo ao painel do usuário, localizado na página principal!"; exit;}?> <?php if(mysql_num_rows($bs) != 1){ print "<b>usuário não encontrado</b>"; exit;}?>  </font></p>
  <table width="606" border="0">
    <form name="form1" method="post" action="index.php?act=grp.up&log_sys=<?php print  $get;?>">
      <tr> 
        <td width="110"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
        <td width="380"> <font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="nome" type="text" id="nome" size="50" value="<?php print  $nome; ?>">
          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">E-mail:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="email" type="text" id="email" size="50" value="<?php print  $email; ?>">
          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Interesses:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="interesses" type="text" id="interesses" size="50" value="<?php print  $interesse; ?>">
          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Site 
          pessoal:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="site" type="text" id="site" size="50" value="<?php print  $site; ?>">
          <br>
          www.site.com.br (sem http://)</font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Nascimento</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="niver" type="text" id="niver" value="<?php print  $niver; ?>">
          99/99/9999</font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Login:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="login_s" type="text" id="login_s" maxlength="15" value="<?php print  $login_bs; ?>">
          m&aacute;ximo 15 caracteres</font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="senha" type="password" id="senha" maxlength="9" value="<?php print  $senha_bs; ?>">
          m&aacute;ximo 9 caracteres</font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Grupo:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <select name="grupo" id="grupo">
            <option value="Membros">Membros</option>
            <option value="administradores">Administradores</option>
          </select>
<?php print "<b>Grupo atual:</b> ".$grps; ?>          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input type="submit" name="Submit" value="Alterar informa&ccedil;&otilde;es">
          </font></td>
      </tr>
    </form>
  </table>
  <p><font color="#FF0000" size="-2" face="Verdana, Arial, Helvetica, sans-serif">Obs:</font><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">
    Caso deixe como administrador, ele poder&aacute; logar no painel de controle 
    com todas as suas permiss&otilde;es!</font></p>
</div>
</body>
</html>