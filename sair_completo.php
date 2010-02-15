<?php
session_start("logando");
unset($_SESSION['logando']);
session_destroy();
?>
<html>
<head>
<title>Aguarde...</title>
<meta http-equiv="refresh" content="3;URL=index.php?act=a.20&log_sys=0">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Voc&ecirc; deslogou 
    com sucesso do sistema inteiro!<br>
    Aguarde, voc&ecirc; est&aacute; sendo redirecionado &agrave; p&aacute;gina 
    principal...</font><br>
  </p>
  </div>
</body>
</html>
