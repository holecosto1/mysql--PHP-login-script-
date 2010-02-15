<?php
include "config.php";
$get = $_GET['log_sys'];
?>

<html>
<title>Painel de Administração</title>
<body> 
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
<div id="Layer3" style="position:absolute; left:140px; top:6px; width:15px; height:275px; z-index:3"> 
  <table width="11" height="275" border="0">
    <tr> 
      <td background="imagens/skin_ad1.gif">&nbsp;</td>
    </tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:160px; top:9px; width:597px; height:202px; z-index:4"> 
  <div align="center"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
$deleta = mysql_query("DELETE FROM adlogs") or die("Erro" . mysql_error());
if($deleta == true){
print "<center>Dados apagados com sucesso</center><br>";
print "<center>Aguarde um instante, iremos desloga-lo para sua seguran&ccedil;a!</center>";
print "<meta http-equiv='refresh' content=2;URL=index.php?act=cb.6w&del=jdfhfdbnfeucncx>";
}else{
print "<center>Erro, não pode ser deletados os valores contidos nos logs...</center>";
};
?></font></div>
</div>
</body>
</html>