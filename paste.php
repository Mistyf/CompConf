<?php

require 'CompConf.php';
$t=new PC();
$t->setpowersupply("atx", 400);
$t->setmotherboard("amd", 4, "i7", "PCI");
$t->setgraphics("Nvidia gt 540m", "SCUDA", "4", "PCI");
$t->setcpu("I7", "i7", 2 , 4);
$t->setRam(1, 2);
echo $t;

?>