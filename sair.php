<?php
session_start("logando");
unset($_SESSION["logando"]);
session_destroy();
?>

<html>
<head>
<title>Aguarde...</title>
<meta http-equiv="refresh" content="4;URL=index.php?act=a.20&log_sys=211">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Aguarde, estamos 
    deslogando voc&ecirc;!<br>
    obrigado por ter utilizado nosso sistema!</font></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Desenvolvido 
    por: <a href="mailto:hlegius@hotmail.com">hlegius</a></font></p>
</div>
</body>
</html>
