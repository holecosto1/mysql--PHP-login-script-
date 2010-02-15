<?php
include "config.php";
// apenas para separar....
$arquivo['a.20'] = "home.php";
$arquivo['a.21'] = "cadastro.php";
$arquivo['a.22'] = "registra.php";
$arquivo['a.23'] = "login.php";
$arquivo['a.25'] = "autentica.php";
$arquivo['a.31'] = "home_b.php";
$arquivo['a.65'] = "pcontrole.php";
$arquivo['a.100'] = "sair.php";
$arquivo['a.156'] = "downloads.php";
$arquivo[8] = "contato.php";
$arquivo['8.ab'] = "contato_mail.php";
//$arquivo['a.89'] = "perfil.php";
$arquivo['c.17'] = "modifica.php";
$arquivo['c.15'] = "atualiza.php";
//arquivos do painel de administração
$arquivo['w.1a'] = "ad_verifica.php";
$arquivo['pc.1a'] = "ad_index.php";
$arquivo['pc.3b'] = "sair_completo.php";
$arquivo['cb.6w'] = "sair_pcontrole.php";
$arquivo['gr.p2'] = "ad_logs.php";
$arquivo['pc.de'] = "ad_deleta.php";
$arquivo['grp.ad'] = "ad_grp.php";
$arquivo['grp.bs'] = "ad_grpbusca.php";
$arquivo['grp.up'] = "ad_grpupdate.php";
$arquivo['me.bs']  = "ad_membros.php";
$arquivo['ad.ls'] =  "ad_lista.php";
$arquivo['ma.ko']  = "ad_mail.php";
$arquivo['pc.inf'] = "ad_insistema.php";

if(empty($_SERVER['QUERY_STRING'])){
header("location:index.php?act=a.20");
}else{
include $arquivo[$_GET[act]];
};
?>
