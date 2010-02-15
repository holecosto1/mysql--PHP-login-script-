<html>
<head>
<title>Sistema de login e senha - Instala&ccedil;&atilde;o ( hlegius - Criando solu&ccedil;&otilde;es )</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<div align="center"> 
  <p><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Instala&ccedil;&atilde;o 
    do Sistema de Login e senha</font></strong><br>
    <font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Insira abaixo 
    os dados da conta do administrador</font></p>
  <p><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Caso deseje 
    futuramente estar adicionando mais administradores ser&aacute; necess&aacute;rio 
    voc&ecirc; permitir o<br>
    </font><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">acesso 
    deles mudando o grupo no painel de administra&ccedil;&atilde;o.<br>
    <font color="#FF0000">Importante:</font> <strong>Remova</strong> esse arquivo 
    no termino da insta&ccedil;&atilde;o!<br>
    N&atilde;o se esque&ccedil;a de <strong>colocar as informa&ccedil;&otilde;es</strong> 
    corretas no arquivo 'config.php'<br>
    abaixo est&aacute; um formul&aacute;rio para voc&ecirc; colocar os dados da 
    conta do administrador.</font></p>
  <table width="356" border="0">
    <form name="form1" method="post" action="inst_confirm.php">
      <tr> 
        <td width="88"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
        <td width="258"> <font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="nome" type="text" id="nome">
          * </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">E-mail:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="email" type="text" id="email">
          * </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">nascimento:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="nasc" type="text" id="nasc" maxlength="10">
          99/99/1999 *</font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Login:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="login" type="text" id="login2">
          * </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="senha" type="password" id="senha2">
          * </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Repita 
          senha:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="r_senha" type="password" id="r_senha2">
          * </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Grupo:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="administradores" type="text" disabled id="administradores" value="administrador">
          </font></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td><div align="right"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
            <input type="submit" name="Submit" value="Instalar o Sistema">
            * campos obrigat&oacute;rios</font></div></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </form>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
