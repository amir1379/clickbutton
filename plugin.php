<?php
/*
Channel : @MadeLineLearn
*/
 $admins = [
  370106794,
];
$listplugins = [
  "clickbutton",
  "ping",
  "option"
];
$cplug = count($listplugins) - 1;
for($n=0; $n<=$cplug; $n++) {
  $pluginlist = "plugins/".$listplugins[$n].".php";
  include($pluginlist);
}
$data=json_decode(file_get_contents('data.json'),true);
$msgid= $data["data"]["msgid"];
unlink("MadelineProto.log");







