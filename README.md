# CompConf (v1.0)

![Comp Conf](http://s28.postimg.org/hjblyri99/compconf.png)
# #Informace
Tento program umožňuje konfiguraci vlastních, předem vybraných, kompatibilních PC komponentů do jedné sestavy.
- Autor: Martin Halva ([Mistyf](https://github.com/Mistyf))
- Jazyk: [PHP](http://www.php.net)
- V programu: [NetBeans IDE](https://netbeans.org/)
- online verze: [Zde](http://73s7.xf.cz/CompConf2.php)

# #Instalace
Soubor `CompConf.php` nahrajte do vámi zvoleného adresáře (poté je potřeba upravit cestu u require)

Tento kód vložte na svojí stránku, kde chcete nagenerovat tabulku:
``` bash
require 'CompConf.php';
$t=new PC();
$t->setpowersupply("atx", 400);
$t->setmotherboard("amd", 4, "i7", "PCI");
$t->setgraphics("Nvidia gt 540m", "SCUDA", "4", "PCI");
$t->setcpu("I7", "i7", 2 , 4);
$t->setRam(1, 2);
echo $t;
```
hodnoty v závorkách udávají parametry komponentů.

# #Verze
- Verze 1.0   (31.3.2015) => [CompConf v1.0](https://github.com/Mistyf/CompConf)

# #Podpora
- Našli jste chybu? máte problém? dotazy zde => [GitHub Issues](https://github.com/Mistyf/CompConf/issues)
- Nebo na pracovní email => [halviscze@gmail.com](halviscze@gmail.com)
