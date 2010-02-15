<?php
include "config.php";
session_start("logando");
if(!(session_is_registered("login") and session_is_registered("senha") and session_is_registered("id"))){
header("location:index.php?act=a.20");
exit;
}
$ip = $_SERVER['REMOTE_ADDR'];
$get = $_GET['log_sys'];
if($_SESSION['id'] != $_GET['log_sys']){ 
$valor = "O usuário de ID: $id, tentou mudar o log_sys de: $id para $get, e o sistema o bloqueou.";
mail($email_root, "Acesso não autorizado", $valor, "FROM: sistema@servidor.com.br");
print "<center>Você não pode mudar o log_sys!</center>"; 
print "<center>Estamos deslogando você, e o administrador foi comunidado sobre a tal atitude!</center>";
print "<meta http-equiv='refresh' content=3;URL=index.php?act=a.100>";
exit;
}else{
$modify	= mysql_query("SELECT * FROM cadastro WHERE id = '$get'") or die ("Erro Critico, informe o administrador!<br /> Informação sobre o erro: " . mysql_error());
$num	= mysql_num_rows($modify);
while(($infos = mysql_fetch_array($modify))){
$grp =  $infos['grp'];
$nome = $infos['nome'];
$login = $infos['login'];
$site  = $infos['site'];
$interesse = $infos['interesse']; 
$niver = $infos['nasc'];
}
}
if($grp == "administradores"){
$pcadmin = "<a href='index.php?act=a.65&log_sys=$id' target='_blank' title='Monitore usuários e mais...'>PControle</a>";
}
?>
<html>
<head>
<title>hlegius - Criando Solu&ccedil;&otilde;es ( &Aacute;rea restrita a logados!)</title>
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

<div id="Layer1" style="position:absolute; left:9px; top:16px; width:97px; height:140px; z-index:1"> 
  <table width="100" border="0">
    <tr> 
      <td><div align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Menu</font></div></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.31&log_sys=<?php print  $id ; ?>">Home</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=c.17&log_sys=<?php print  $id; ?>">Modificar 
        dados</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Usu&aacute;rios</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.156&log_sys=<?php print  $id; ?>">Downloads</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.100">Sair</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print  $pcadmin; ?></font></td>
    </tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:110px; top:16px; width:624px; height:72px; z-index:2"> 
  <div align="center">
    <p><strong>P&aacute;gina Principal Restrita a usu&aacute;rios logados</strong></p>
    <p align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Ol&aacute; 
      <b><?php print  $login ?></b>, agora que voc&ecirc; est&aacute; logado, poder&aacute; 
      utilizar todos os nossos recursos! Bom proveito!</font></p>
  </div>
</div>
<div id="Layer3" style="position:absolute; left:112px; top:94px; width:622px; height:175px; z-index:3"> 
  <font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?php function brasil($formato,$time=false)	{
		if(!$time) $time = time();
		$traduz = array(
		'Sunday' => 'Domingo',
		'Monday' => 'Segunda',
		'Tuesday' => 'Terça',
		'Wednesday' => 'Quarta',
		'Thursday' => 'Quinta',
		'Friday' => 'Sexta',
		'Saturday' => 'Sábado',
		'Sun' => 'Dom',
		'Mon' => 'Seg',
		'Tue' => 'Ter',
		'Wed' => 'Qua',
		'Thu' => 'Qui',
		'Fri' => 'Sex',
		'Sat' => 'Sáb',
		'January' => 'janeiro',
		'February' => 'fevereiro',
		'March' => 'Março',
		'April' => 'abril',
		'May' => 'maio',
		'June' => 'junho',
		'July' => 'julho',
		'August' => 'agosto',
		'September' => 'Setembro',
		'Octuber' => 'Outubro',
		'November' => 'novembro',
		'December' => 'Dezembro');
		$data = date($formato, $time);
		$data = strtr($data,$traduz);
		return $data;
		}
		print brasil("l, d  F  Y - H:i"); ?>
  </font><br>
  <table width="469" border="0" align="right">
    <tr> 
      <td width="152"><div align="right"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Seus 
          dados:</font></div></td>
      <td width="462"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print  $nome; ?></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Login:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print  $login; ?></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Site:</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print  "<a href='http://$site' target='_blank' title=\"Homepage de $nome\">$site</a>"; ?></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Interesse</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print  $interesse; ?></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Anivers&aacute;rio</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print  $niver; ?></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">IP</font></td>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print  $ip?></font></td>
    </tr>
  </table>
</div>
<div id="Layer4" style="position:absolute; left:285px; top:335px; width:292px; height:23px; z-index:4"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Desenvolvido 
  por: <a href="mailto:hlegius@hotmail.com">hlegius</a></font></div>
<div id="Layer5" style="position:absolute; left:10px; top:160px; width:149px; height:103px; z-index:5"><font size="-2" face="Arial, Helvetica, sans-serif"><strong>&Uacute;ltimo 
  Cadastro<br>
  <br>
  <?php
$last = mysql_query("SELECT * FROM cadastro ORDER BY id DESC LIMIT 0,1") or die("Erro" . mysql_error());
while($ultimo = mysql_fetch_array($last)){
print "Nick: <a href='http://".$ultimo['site']."' title='Home page de: ".$ultimo['login']."' target='_blank'>".$ultimo['login']."</a>";
}?>
  <br>
  bem-vindo ao grupo!</strong></font></div>
</body>
</html>
