<?php
include "config.php";
$id = $_GET['log_sys'];
?>


<html>
<head>
<title>Entre em contato com hlegius</title>
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

<body><? if($_SESSION['id'] == $_GET['log_sys']){ ?>
<div id="Layer1" style="position:absolute; left:6px; top:17px; width:95px; height:132px; z-index:1"> 
  <table width="100" border="0">
    <tr> 
      <td><div align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Menu</font></div></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.20&log_sys=<?php print  $id; ?>">Principal</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.21&log_sys=0">Cadastre-se!</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.23">Login</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Usu&aacute;rios</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=8">Contato</a></font></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
  </table>
</div><? } else { ?><div id="Layer1" style="position:absolute; left:9px; top:16px; width:97px; height:140px; z-index:1"> 
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
</div><? };?>
<div id="Layer5" style="position:absolute; left:9px; top:150px; width:138px; height:103px; z-index:5"><font size="-2" face="Arial, Helvetica, sans-serif"><strong>&Uacute;ltimo 
  Cadastro<br>
  <br>
  <?php
$last = mysql_query("SELECT * FROM cadastro ORDER BY id DESC LIMIT 0,1") or die("Erro" . mysql_error());
while($ultimo = mysql_fetch_array($last)){
print "Nick: <a href='http://".$ultimo['id']."' title='Home page de ".$ultimo['login']."' target='_blank'>".$ultimo['login']."</a>";
}?>
  <br>
  bem-vindo ao grupo!</strong></font></div>
<div id="Layer2" style="position:absolute; left:106px; top:17px; width:646px; height:125px; z-index:6">
  <p><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Para falar com o desenvolvedor 
    desse sistema, coloque as informa&ccedil;&otilde;es requeridas abaixo:</font></p>
  <table width="383" border="0" align="center">
    <form name="form1" method="post" action="index.php?act=8.ab&log_sys=<?php print  $id;?>">
      <tr> 
        <td width="105"><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></div></td>
        <td width="268"> <div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
            <input name="nome" type="text" id="nome" size="50">
            </font></div></td>
      </tr>
      <tr> 
        <td><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">E-mail:</font></div></td>
        <td><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
            <input name="email" type="text" id="email" size="50">
            </font></div></td>
      </tr>
      <tr> 
        <td><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Assunto:</font></div></td>
        <td><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
            <input name="assunto" type="text" id="assunto" size="50">
            </font></div></td>
      </tr>
      <tr> 
        <td><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Mensagem</font></div></td>
        <td><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
            <textarea name="mensagem" cols="44" id="mensagem"></textarea>
            </font></div></td>
      </tr>
      <tr> 
        <td><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"></font></div></td>
        <td><div align="left"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
            <input name="env" type="submit" id="env" value="Enviar Mensagem!">
            </font></div></td>
      </tr>
    </form>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>