<?php
include "config.php";
$mysql_total = mysql_query("SELECT count(*) as Total FROM cadastro");
$resulta     = mysql_result($mysql_total,0,"total");
$id = $_GET['log_sys'];
$busca_user = $_POST['busca_user'];
if($busca_user == NULL){

?>
<html>
<head>
<title>Lista dos usuários cadastrados...</title>
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
<div id="Layer2" style="position:absolute; left:121px; top:14px; width:621px; height:87px; z-index:2"> 
  <table width="511" border="0">
    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <tr> 
        <td width="182"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Busca 
          por usu&aacute;rio: (Nick):</font></td>
        <td width="319"> <font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input type="text" name="busca_user">
          <input name="env_user" type="submit" id="env_user" value="Procurar">
          </font></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </form>
  </table>
  <div id="Layer3" style="position:absolute; left:0px; top:110px; width:47px; height:23px; z-index:3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
    <?php
}else{
$mysql_ex = mysql_query("SELECT * FROM cadastro WHERE nick LIKE '%$busca_user%'");
if(mysql_num_rows($mysql_ex) > 0){
			while($perfil  = mysql_fetch_array($mysql_ex)){
			print "<title>Procura pelo usuário: $busca_user</title>";
print "Nome: ".$perfil['nome']."<br />Login: ".$perfil['login']."<br />Interesses: ".$perfil['interesses']."<br />Site: <a href=\"http://".$perfil['site']."\" target='_blank'>".$perfil['site']."</a><br />Nascimento: ".$perfil['nasc']."<br/>Grupo: ".$perfil['grp']."<br/><br />";
		}	
}else{
print "Não foi possivel localizar nenhum resultado";
};
};

?>
    </font></div>
  <font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Total de usu&aacute;rios 
  cadastrados: <?php print $resulta; ?> </font> 
  <p> <font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> </font></p>
</div>
<?php if($_SESSION['id'] == $_GET['log_sys']){ ?>
<div id="Layer1" style="position:absolute; left:6px; top:17px; width:95px; height:132px; z-index:1"> 
  <table width="100" border="0">
    <tr> 
      <td><div align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Menu</font></div></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.20&log_sys=<?php print $id; ?>">Principal</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.21&log_sys=0">Cadastre-se!</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.23">Login</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.89">Usu&aacute;rios</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=8">Contato</a></font></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
  </table>
</div><?php } else { ?><div id="Layer1" style="position:absolute; left:9px; top:16px; width:97px; height:140px; z-index:1"> 
  <table width="100" border="0">
    <tr> 
      <td><div align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Menu</font></div></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.31&log_sys=<?php print $id ; ?>">Home</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=c.17&log_sys=<?php print $id; ?>">Modificar 
        dados</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.89&log_sys=<?php print $id; ?>">Usu&aacute;rios</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.156&log_sys=<?php print $id; ?>">Downloads</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.100">Sair</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print $pcadmin; ?></font></td>
    </tr>
  </table>
</div><?php };?>
</body>
</html>